<?php
$content = file_get_contents('public/assets/css/main.css');
// Find where Responsive chunk starts, ignore the messy encoding
$pos = strpos($content, '/* ---------- Responsive ---------- */');
if ($pos !== false) {
    $clean = substr($content, 0, $pos);
    $out = $clean . "/* ---------- Responsive ---------- */\n" . 
"@media (max-width: 991px) {\n" .
"  .section-padding { padding: 60px 0; }\n" .
"  .navbar-collapse { background: white; padding: 20px; border-radius: var(--radius-md); box-shadow: var(--shadow-md); margin-top: 10px; }\n" .
"}\n\n" .
"@media (max-width: 767px) {\n" .
"  h1 { font-size: clamp(40px, 8vw, 60px); }\n" .
"  .hero-cta-group { flex-wrap: nowrap !important; gap: 8px !important; }\n" .
"  .hero-cta-group .btn { padding: 14px 16px !important; font-size: 14px !important; width: 50%; margin-bottom: 0px !important; white-space: nowrap; }\n" .
"  .bento-grid { gap: 1rem !important; }\n" .
"  .section-padding { padding: 50px 0; }\n" .
"}\n\n" .
"@media (hover: hover) {\n" .
"  body { cursor: none; }\n" .
"  .custom-cursor, .custom-cursor-follower { pointer-events: none; position: fixed; border-radius: 50%; z-index: 9999; transform: translate(-50%, -50%); transition: opacity 0.3s; }\n" .
"  .custom-cursor { width: 10px; height: 10px; background: var(--text-dark); }\n" .
"  .custom-cursor-follower { width: 40px; height: 40px; border: 1px solid var(--text-dark); transition: transform 0.15s ease-out; }\n" .
"  a:hover ~ .custom-cursor-follower { transform: translate(-50%, -50%) scale(1.5); background: rgba(17,17,17,0.1); }\n" .
"}\n\n" .
".noise-overlay { position: fixed; inset: 0; z-index: 9998; pointer-events: none; opacity: 0.35; mix-blend-mode: multiply; background-image: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E\"); }";
    file_put_contents('public/assets/css/main.css', $out);
}
