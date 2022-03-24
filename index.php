<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $sideArticles = Get::all('articles', 2);
    $topStories = Get::all('articles', 1);
      
  } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
     
    <div class="topStory width-8 ">
        <div class="heading width-8">
            <?php
             foreach($topStories as $topStory){

            ?>
            <h2 class="story-header">Top Story</h1>
            <hr>
        </div>
        
        <h1><?= $topStory->title ?></h1>
        <p class="date"><strong><?= $topStory->author_id ?></strong> - <?= $topStory->date ?> -<?= $topStory->time ?></p>
        <h5>T<?= $topStory->subtitle ?></h5>
             <div class="nested">
                 <div class="width-12">
                   <p> <?= $topStory->article ?>
                    </p>
                    
                    
                    <p>
                    <?= $topStory->article ?>
                    </p> 
                        
                        
                     
                 </div>
                 

             </div>
    </div>
    <?php
             }
    ?>
        <!-- 1 Grid Gap -->
        <div class=" width-1"></div>
        <div class="medium width-3">
            <div class="medium-text p-bottom">
            <h2 class="bottom story-header">Breaking</h2>
            <h4>The Russian threat to invade Ukraine</h4>
            <p class="preview">The series reminded Turks of the age of the great conquests that expanded
                 the Ottoman Empire up to the Russian border.</p>

             <p><strong>Zvi Bar'el</strong> - Feb 10, 2022 -2:51PM</p>
            </div>
            <!-- Article loop -->
                                <?php
                    foreach($sideArticles as $sideArticle){
                       
                    
                    ?>
                     <hr>
                     <h2 class="bottom">Breaking</h2>
                        <h4><?= $sideArticle->title ?></h4>
                        <p class="preview"><?= $sideArticle->subtitle ?></p>
            
                         <p><strong>><?= $sideArticle->writer_id ?><</strong> -<?= $sideArticle->date ?> -<?= $sideArticle->time ?></p>
                    <?php
                    }
                    ?>

             <!-- <h2 class="bottom">Breaking</h2> -->
             <!-- <hr>
            <h4>Covid pills are easier to find as the omicron surge subsides</h4>
            <p class="preview">The supply of Covid-19 antiviral pills is picking up in the country,
                 state health departments and physicians say, as drug companies like Pfizer churn out more of the treatments.</p>

             <p><strong>Berkeley Lovelace Jr.</strong> - Feb 10, 2022 -2:51PM</p> -->
</div>
  
</div>
    <div class="mini width-3">
        <h5 class="centre">Newsletter: Olympics 1, coronavirus 0</h5>
        <p class="centre"><strong>Zvi Barel</strong> - Feb 10, 2022 -2:51PM</p>
    </div>
    <div class="mini width-3">
        <h5 class="centre">Target lifts mask requirements for Shoppers</h5>
        <p class="centre"><strong>Doha Madani</strong> - Feb 10, 2022 -2:51PM</p>
    </div>
    <div class="mini width-3">
        <h5 class="centre">The philosopher King</h5>
        <p class="centre"><strong> Zack Beauchamp</strong> - Feb. 10, 2022 -2:51 PM
        </p>
    </div>
</div>
</body>
</html>