<?php

$db = new SQLite3('./src/counter.db');

$ip = $_SERVER['REMOTE_ADDR'];
$now = time();
$limit = $now - (24 * 60 * 60);

$stmt = $db->prepare("SELECT COUNT(*) as count FROM views WHERE ip = :ip AND created_at > :limit");
$stmt->bindValue(':ip', $ip, SQLITE3_TEXT);
$stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);

$result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

if ($result['count'] == 0) {
    $stmt = $db->prepare("INSERT INTO views (ip, created_at) VALUES (:ip, :time)");
    $stmt->bindValue(':ip', $ip, SQLITE3_TEXT);
    $stmt->bindValue(':time', $now, SQLITE3_INTEGER);
    $stmt->execute();
    $db->exec("UPDATE counter SET views = views + 1 WHERE id = 1");
}

$totalViews = $db->querySingle("SELECT views FROM counter WHERE id = 1");
