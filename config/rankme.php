<?php
return [
    "table" => env("RANKME_TABLE", "rankme"),
    "steam_key" => env("RANKME_STEAMKEY", ""),
    "vac" => [
        "count" => env("VAC_COUNT", 100),
        "enabled" => env("VAC_ENABLE", false),
        "autodelete" => env("VAC_AUTODELETE", false),
    ]
];