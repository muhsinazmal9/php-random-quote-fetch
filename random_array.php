<?php 
// Assign in the array
$banglaQuotes = [
    [
        "quote" => "জীবনটি একটি পুরোপুরি অদ্ভুত অভিজ্ঞান, এটি অনুভব করুন।",
        "writer" => "আনীসুল হক"
    ],
    [
        "quote" => "সব সময়ের জন্য ভালোবাসা, সব কিছুই সম্ভব।",
        "writer" => "রবীন্দ্রনাথ ঠাকুর"
    ],
    [
        "quote" => "আপনি সফল হতে চাইলে অবশ্যই বীরত্ব এবং উৎসাহ প্রদর্শন করুন।",
        "writer" => "সুনীল গঙ্গোপাধ্যায়"
    ],
    [
        "quote" => "জীবনটি একটি রহস্য, তাই এটি চেনুন এবং স্বীকার করুন।",
        "writer" => "আলবার্ট এইনস্টাইন"
    ],
    [
        "quote" => "কারো সঙ্গে আপনি কখনোই একটি ভালো বন্ধু হতে পারবেন না যদি আপনি নিজেকে ভালো বন্ধু হিসেবে পরিচয় করতে না পারেন।",
        "writer" => "এলেন ওল্ডম্যান"
    ],
    [
        "quote" => "আপনি সফল হতে চাইলে, আপনার লক্ষ্যের দিকে মুখ করুন, নয় ব্যক্তিদের যাচাই করতে।",
        "writer" => "বিল গেটস"
    ],
    [
        "quote" => "জীবন একটি প্রয়াসকে মাত্র অর্থ করে যখন সেটি একটি উচ্চ উদ্দেশ্যের দিকে তাকিয়ে থাকে।",
        "writer" => "হেনরি ডেভিড থোরো"
    ],
    [
        "quote" => "আপনি যদি একটি স্বপ্ন দেখতে চান, তাতে শক্তি দিন।",
        "writer" => "রবীন্দ্রনাথ ঠাকুর"
    ],
    [
        "quote" => "আপনি যদি ভবিষ্যতে কিছু তৈরি করতে চান, তবে এখনই শুরু করুন।",
        "writer" => "লেস ব্রাউন"
    ],
    [
        "quote" => "জীবন একটি চোখের নয়, এটি তাদের সঙ্গে সব কিছু দেখতে একটি উপকরণ।",
        "writer" => "হেলেন কেলার"
    ],
    [
        "quote" => "শক্তির সাথে বুদ্ধির সম্পর্ক করলে মাত্র সফলতা হতে পারে।",
        "writer" => "এলবার্ট এইনস্টাইন"
    ],
];

// print_r($banglaQuotes[0]['quote']);

$quotes = $banglaQuotes[array_rand($banglaQuotes)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md p-8 bg-white ring rounded-md text-center">
        <blockquote>
            <h2 class="text-2xl font-bold text-gray-800">&ldquo;<?= $quotes['quote']?>&rdquo;</h2>
            <p class="mt-4 text-gray-600">- <?= $quotes['writer']?></p>
        </blockquote>
    </div>
</body>
</html>