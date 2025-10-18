<?php
/**
 * File: system-test.php
 * Tujuan: Whitebox Testing untuk REST Client PHP NewsAPI.org
 * Metode: Exception Handling dengan try...catch
 * Output: PASS atau FAIL
 */

function getNews($apiKey, $country, $category) {
    try {
        $url = "https://newsapi.org/v2/top-headlines?country=$country&category=$category&apiKey=$apiKey";
        $response = @file_get_contents($url); // @ untuk suppress warning agar di-handle manual

        // Jika koneksi gagal
        if ($response === FALSE) {
            throw new Exception("Gagal mengambil data dari API");
        }

        $data = json_decode($response, true);

        // Jika respons dari API bukan 'ok'
        if (!isset($data['status']) || $data['status'] !== 'ok') {
            $message = isset($data['message']) ? $data['message'] : "Unknown error";
            throw new Exception("Response error: " . $message);
        }

        // Jika semua baik, kembalikan data berita
        return $data['articles'];

    } catch (Exception $e) {
        // Tangkap dan kembalikan pesan error
        return ["error" => $e->getMessage()];
    }
}

// === TEST CASE ===
function test_getNews_invalidApiKey() {
    echo "Running Test Case: WB_API_001 - Invalid API Key Test...\n";

    $result = getNews("INVALID_KEY", "us", "technology");

    // Validator internal
    if (isset($result['error']) && 
        (str_contains(strtolower($result['error']), "apikey") || 
         str_contains(strtolower($result['error']), "invalid"))) {

        echo "✅ PASS: Exception tertangkap dengan pesan -> " . $result['error'] . PHP_EOL;
    } else {
        echo "❌ FAIL: Error tidak tertangkap atau pesan tidak sesuai.\n";
        if (isset($result['error'])) {
            echo "Pesan error yang diterima: " . $result['error'] . PHP_EOL;
        } else {
            echo "Tidak ada key 'error' dalam hasil.\n";
        }
    }
}

// Jalankan test case
test_getNews_invalidApiKey();
?>
