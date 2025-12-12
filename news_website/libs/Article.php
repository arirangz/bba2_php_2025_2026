<?php

$articles = [
    ["title" => "ASUS Launches World’s First 5K 180Hz Dual-Mode Gaming Monitor ROG Strix XG27JCG", "content" => "ASUS recently launched its flagship IPS gaming monitor, called ROG Strix XG27JCG, which is the world's first 5K@180Hz monitor. It's common to see 4K IPS panels with high refresh rates, but 5K resolution increases the pixel density incredibly to offer more vivid visuals. On paper, 4K to 5K resolution may look smaller, but you are getting a whopping 77% more pixels on a 5K panel, which should explain why it's impressive to see a 5K@180Hz display."],
    ["title" => "Intel’s ‘RMA Request’ Fiasco Pops Up Once Again as a User Reports a “Nightmare” Experience, With the Firm Backing Out of a Refund Request", "content" => "Intel's consumer CPU business hasn't been in the best of positions following Raptor Lake, especially in the desktop segment, as the firm's Arrow Lake lineup couldn't do much in terms of competing with AMD's counterparts, which is one of the reasons why the company's market share declined in the retail segment. To add on, Intel seems to be 'backing out' of agreements with RMA requests for its 13th-gen CPUs, as a user managed to approach Wccftech, with proofs showing how Intel initially promised an RMA refund, but didn't stay committed to the terms."],
    ["title" => "Segotep To Launch Titanload 16-pin Cable This Month; Plans To Go With Only 14A EX Version", "content" => "Chinese manufacturer Segotep announced its Titanload 16-pin cables last week, which initially brought two different versions. These cables aimed to mitigate the melting issues on the 16-pin GPU power connector, which have killed countless high-end RTX 50 series GPUs. The original post explained the difference between the regular 9.2A (Intel ATX 3.1-compliant) 16-pin cable and the Titanload cables, offering users a much more reliable solution for their GPUs."],
    ["title" => "ZOTAC Magnus Reportedly Utilizes A Hybrid PCIe x8 + x8 Design For Powering RTX 5060 Ti", "content" => "ZOTAC Magnus isn't just the smallest mini PC with a desktop GeForce RTX 5060 Ti GPU, but it is probably the first one to utilize a hybrid PCIe interface that does two jobs at the same time. Getting a desktop-variant GPU into a 2.65 Litre chassis was already remarkable, but what's more surprising is that ZOTAC managed to totally eliminate the need for an external GPU power connector."],
];

function getArticleById(int $index, $articles):array
{
    return $articles[$index];
}
