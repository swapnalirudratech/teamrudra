<?php
set_time_limit(300); // Allow script to run for 5 minutes



require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Now you can access your key safely
$apiKey = $_ENV['agent_api_key'];



if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}


header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");


// 1. CONFIGURATION

//  PASTE YOUR REAL API KEY BELOW
$apiKey = $apiKey;

// We use 1.5-flash because it is fast, stable, and supports long outputs (8k tokens).
$model = "gemini-2.5-flash";
$apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/$model:generateContent?key=$apiKey";


// 2. INPUT HANDLING

// $inputJSON = file_get_contents('php://input');
// $input = json_decode($inputJSON, true);

// print_r($input);
// die();
// $userPrompt = $input['prompt'] ?? '';
// $businessName = htmlspecialchars($input['businessName'] ?? 'Our Company', ENT_QUOTES, 'UTF-8');

// if (empty($userPrompt)) {
//     echo json_encode(['error' => 'No prompt provided.']);
//     exit;
// }

// 2. INPUT HANDLING
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// DEBUGGING: Instead of print_r/die which breaks JSON, 
// log it to a text file on your server to verify the data.
// file_put_contents('debug_log.txt', print_r($input, true)); 

$userPrompt = $input['prompt'] ?? '';

// Ensure this matches the key sent in JS: 'businessName'
$businessName = $input['businessName'] ?? 'Our Company';
$businessName = htmlspecialchars($businessName, ENT_QUOTES, 'UTF-8');

if (empty($userPrompt)) {
    // Return a valid JSON error so the frontend can display it
    echo json_encode(['error' => 'No prompt provided.']);
    exit;
}

// 3. CORE AI ENGINE FUNCTION

function callGeminiAPI($url, $systemInstruction, $userMessage, $requireJson = false)
{
    $payload = [
        "contents" => [
            [
                "role" => "user",
                "parts" => [
                    ["text" => $systemInstruction . "\n\nUSER REQUEST:\n" . $userMessage]
                ]
            ]
        ],
        "generationConfig" => [
            "temperature" => 0.75, // Balanced creativity
            "maxOutputTokens" => 20000, // Maximum allowed for long pages
        ]
    ];

    if ($requireJson) {
        $payload["generationConfig"]["responseMimeType"] = "application/json";
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 240 // Wait up to 2 minutes
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        return ['error' => 'Connection Error: ' . curl_error($ch)];
    }
    curl_close($ch);

    $decoded = json_decode($response, true);

    if (isset($decoded['candidates'][0]['content']['parts'][0]['text'])) {
        return $decoded['candidates'][0]['content']['parts'][0]['text'];
    } else {
        return ['error' => 'Gemini API Error', 'details' => $decoded];
    }
}


// STEP 1: THE ARCHITECT (Smart Strategy & Colors)

$analysisPrompt = "
You are a Senior Art Director. Analyze the user request to determine the design strategy.

COLOR & THEME LOGIC (PSYCHOLOGY BASED):
1. **Analyze the Emotion:** - Trust/Professional → Light Mode + Blue/Navy (e.g., Law, Finance, IT).
   - Food/Appetite → Light Mode + Warm Colors (e.g., Bakery, Restaurant).
   - Luxury/High-End → Light Mode + Minimalist Black/White (e.g., Fashion, Jewelry).
   - Growth/Nature → Light Mode + Green/Earth Tones (e.g., Eco, Health).
   - Innovation/Nightlife → Dark Mode + Neon (e.g., Gaming, Crypto, Cyber Security).

2. **Strict Default Rule:** - DEFAULT to **LIGHT MODE** (White/Gray backgrounds).
   - ONLY use **DARK MODE** if the industry specifically requires a 'night' or 'hacker' vibe.

3. **Structure Plan:**
   - You MUST include these 7 sections: Navbar, Hero, Social Proof, Features, How It Works, Testimonials, Footer.

Return JSON ONLY:
{
  \"business_type\": \"string\",
  \"theme_mode\": \"string (LIGHT or DARK)\",
  \"color_palette\": \"string (e.g. 'Bg: White, Text: Slate-900, Accent: Indigo-600')\",
  \"hero_headline\": \"string (Catchy marketing headline)\",
  \"structure\": [\"Navbar\", \"Hero\", \"Logos\", \"Features\", \"Steps\", \"Testimonials\", \"Footer\"]
}
";

$analysisRaw = callGeminiAPI($apiUrl, $analysisPrompt, $userPrompt, true);

if (is_array($analysisRaw)) {
    echo json_encode(["error" => "Analysis Failed", "details" => $analysisRaw]);
    exit;
}
$siteData = json_decode($analysisRaw, true);


// STEP 2: THE BUILDER (Pixel-Perfect Coding)

$sections = implode(", ", $siteData['structure']);

$designSystemPrompt = "
You are an Awwwards-winning Frontend Developer. Build a PREMIUM Single-File HTML Website.

CONTEXT:
- **Business:** {$siteData['business_type']}
- **Theme:** {$siteData['theme_mode']} Mode.
- **Palette:** {$siteData['color_palette']} (USE STRICTLY).
- **Sections:** $sections

DESIGN SYSTEM (STRICT RULES):
1. **Libraries:** - Tailwind CSS (CDN).
   - FontAwesome (CDN).
   - Google Fonts (Import 'Outfit' or 'Space Grotesk').
   - AOS Animation (`<script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>`).

2. **Layout Fixes (Crucial):**
   - **Hero Image:** For the main Hero section image, use a large, high-quality image with rounded corners and a shadow. E.g., `class='w-full md:w-1/2 rounded-3xl shadow-2xl STRICTLY use this class also for the main hero image: `w-full h-[20rem] md:h-[500px] object-cover rounded-3xl shadow-2xl'`.
   - **Card Images:** Always use `w-full h-48 object-cover` for smaller card images.
   - **Grids:** Use `grid-cols-1 md:grid-cols-3 gap-8`. Ensure cards have `h-full`.
   - **Navbar:** Sticky top, Glassmorphism (`backdrop-blur-md`).
   - **Spacing:** Use massive padding (`py-20`, `px-6`).
   - ** Company Name:** Use EXACTLY '{$businessName}'. Do not append 'Solutions', 'Inc', or any other words. Use this name for the Logo, Header, and Footer.

3. **Mega Footer:**
   - 4 Columns: Brand, Quick Links, Resources, Newsletter.
   - Must look professional with copyright at bottom.

4. **Animations:**
   - Add `data-aos='fade-up'` to all main cards and headings.

   5. **Images:** Use 'https://picsum.photos/seed/{keyword}/800/600' (Change {keyword} based on the section, e.g., 'tech', 'team', 'hero').

   6. **Testimonials:** ALWAYS include:
   - A user avatar image (circular).
   - A 5-star rating icon set (FontAwesome).
   - A large quote icon background.

   
7. **Social Proof (Infinite Scroll):**
   - Create a 'Trusted By' section with a full-width background.
   - **The Logic:** Create a container with `overflow-hidden`. Inside, create a wrapper `div` with `flex whitespace-nowrap`.
   - **The Animation:** Inject this custom CSS style block in the HTML:
     `<style>
       @keyframes scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
       .animate-scroll { display: flex; animation: scroll 30s linear infinite; width: max-content; }
     </style>`
   - **The Content:** Inside the `.animate-scroll` div, generate **15 distinct FontAwesome Brand Icons** (e.g., `fa-google`, `fa-amazon`, `fa-stripe`).
   - **The Loop:** You MUST **duplicate** the entire set of 15 icons immediately after the first set (so there are 30 icons total in the row).
   - **Styling:** Style icons as `text-5xl mx-12 text-gray-400 opacity-60 grayscale hover:grayscale-0 transition`.

  

OUTPUT FORMAT:
- Return ONLY RAW HTML.
- Initialize AOS at the end: `<script>AOS.init();</script>`
- NO Markdown blocks.
";

$htmlCode = callGeminiAPI($apiUrl, $designSystemPrompt, "Generate full website now.", false);

// Safety Check
if (is_array($htmlCode)) {
    echo json_encode(["error" => "Generation Failed", "details" => $htmlCode]);
    exit;
}

// Clean Output
$htmlCode = trim(str_replace(['```html', '```'], '', $htmlCode));

// Emergency Closing Tag Fix (in case code stops early)
if (!str_contains($htmlCode, '</html>')) {
    $htmlCode .= "\n</body>\n</html>";
}

// Final Response
echo json_encode([
    'html' => $htmlCode,
    'meta' => $siteData
]);
