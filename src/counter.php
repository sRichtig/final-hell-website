<?php

$db = new SQLite3('counter.db');

$ip = $_SERVER['REMOTE_ADDR'];
$now = time();
$limit = $now - (24 * 60 * 60); // 24 Stunden

// prüfen ob IP in letzten 24h gezählt wurde
$stmt = $db->prepare("SELECT COUNT(*) as count FROM views WHERE ip = :ip AND created_at > :limit");
$stmt->bindValue(':ip', $ip, SQLITE3_TEXT);
$stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);

$result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

if ($result['count'] == 0) {

    // neue View speichern
    $stmt = $db->prepare("INSERT INTO views (ip, created_at) VALUES (:ip, :time)");
    $stmt->bindValue(':ip', $ip, SQLITE3_TEXT);
    $stmt->bindValue(':time', $now, SQLITE3_INTEGER);
    $stmt->execute();

    // Counter erhöhen
    $db->exec("UPDATE counter SET views = views + 1 WHERE id = 1");
}

// Gesamtviews holen
$total = $db->querySingle("SELECT views FROM counter WHERE id = 1");
