<?php
// inc/event-types.php

/**
 * Central definition of event types.
 * Key = ACF value slug
 */
function kidsup_event_type_map(): array
{
    $base = get_stylesheet_directory_uri() . "/img/event-types";

    return [
        "choco_party" => [
            "label" => "チョコ|パーティー",
            "icon" => $base . "/choco_party.svg",
            "color" => "#b79074",
        ],
        "spring_school" => [
            "label" => "スプリング|スクール",
            "icon" => $base . "/spring_school.svg",
            "color" => "#ff66b3",
        ],
        "special_party" => [
            "label" => "スペシャル|パーティー",
            "icon" => $base . "/special_party.svg",
            "color" => "#f48120",
        ],
        "science_party" => [
            "label" => "サイエンス|パーティー",
            "icon" => $base . "/science_party.svg",
            "color" => "#63567f",
        ],
        "summer_school" => [
            "label" => "サマー|スクール",
            "icon" => $base . "/summer_school.svg",
            "color" => "#f48120",
        ],
        "halloween_party" => [
            "label" => "ハロウィン|パーティー",
            "icon" => $base . "/halloween_party.svg",
            "color" => "#63567f",
        ],
        "christmas_party" => [
            "label" => "クリスマス|パーティー",
            "icon" => $base . "/christmas_party.svg",
            "color" => "#74b0f4",
        ],
        "winter_school" => [
            "label" => "ウィンター|スクール",
            "icon" => $base . "/winter_school.svg",
            "color" => "#74b0f4",
        ],
        "special_offer" => [
            "label" => "スペシャル|オファー",
            "icon" => $base . "/special_offer.svg",
            "color" => "#f48120",
        ],
        "speech_contest" => [
            "label" => "スピーチ|コンテスト",
            "icon" => $base . "/speech_contest.svg",
            "color" => "#63567f",
        ],

        "other" => [
            "label" => "その他",
            "icon" => $base . "/other.svg",
            "color" => "#f48120",
        ],
    ];
}

function kidsup_event_type_config(?string $key): array
{
    $map = kidsup_event_type_map();
    $key = $key ?: "other";
    return $map[$key] ?? $map["other"];
}
