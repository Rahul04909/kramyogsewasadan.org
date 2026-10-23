<?php
/**
 * includes/visitor-counter.php
 * ============================================================
 * Official Website Visitor Counter Engine
 * Kram Yog Sewa Sadan Trust
 * ============================================================
 * Reliably tracks and persists unique visitor sessions without
 * requiring database dependencies.
 */

if (!function_exists('get_kyss_visitor_stats')) {
    function get_kyss_visitor_stats() {
        $counter_file = __DIR__ . '/visitor_count.txt';
        $base_count = 24850; // Official starting baseline

        // Read or initialize current count
        if (!file_exists($counter_file)) {
            $current_count = $base_count;
            @file_put_contents($counter_file, $current_count);
        } else {
            $raw_val = @file_get_contents($counter_file);
            $current_count = is_numeric(trim($raw_val)) ? (int) trim($raw_val) : $base_count;
            if ($current_count < $base_count) {
                $current_count = $base_count;
            }
        }

        // Increment count only for new visitor session (24h cookie window)
        $cookie_name = 'kyss_visitor_tracked';
        if (!isset($_COOKIE[$cookie_name])) {
            $current_count++;
            @file_put_contents($counter_file, $current_count);
            if (!headers_sent()) {
                @setcookie($cookie_name, '1', time() + 86400, '/');
            }
        }

        $formatted = number_format($current_count);
        // Pad to at least 6 digits for sleek odometer display
        $padded_str = str_pad((string)$current_count, 6, '0', STR_PAD_LEFT);
        $digits = str_split($padded_str);

        return [
            'count'     => $current_count,
            'formatted' => $formatted,
            'digits'    => $digits
        ];
    }
}

// Global variables for immediate component inclusion
$kyss_visitor_data = get_kyss_visitor_stats();
$kyss_visitor_count = $kyss_visitor_data['count'];
$kyss_visitor_count_formatted = $kyss_visitor_data['formatted'];
$kyss_visitor_digits = $kyss_visitor_data['digits'];
