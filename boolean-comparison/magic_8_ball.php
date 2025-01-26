<?php
// function magic8Ball() 
// {
//    // Prompt the player to enter a yes or no question
//    $question = readline("Ask a yes or no question: ");

//    // Add some personal flair
//    echo "Hmm... Let me think about that...\n";

//     // Array of possible responses
//     $responses = [
//         "It is certain.",
//         "Without a doubt.",
//         "Yes - definitely.",
//         "You may rely on it.",
//         "You may rely on it.",
//         "As I see it, yes.",
//         "Most likely.",
//         "Outlook good.",
//         "Yes",
//         "Signs point to yes.",
//         "Reply hazy, try again.",
//         "Ask again later.",
//         "Better not tell you now.",
//         "Cannot predict now.",
//         "Concentrate and ask again.",
//         "Don't count on it.",
//         "My reply is no.",
//         "My sources say no.",
//         "Very doubtful.",
//         "Outlook not so good."
//     ];

//       // Randomly select a response
//     $randomIndex = array_rand($responses);
//     $answer = $responses[$randomIndex];

   

//     // Return the response
//     echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: "; 

//      echo $answer;

// }

function magic8Ball() 
{
    // Prompt the player for a yes or no question
    $question = readline("Ask a yes or no question: ");
    
    // Generate a random number between 0 and 7
    $randomNumber = rand(0, 7);
    
    echo "Thinking about your question...\n";

    // Use a switch statement to decide the response
    switch ($randomNumber) {
        case 0:
            echo "It is certain.\n";
            break;
        case 1:
            echo "It is decidedly so.\n";
            break;
        case 2:
            echo "Without a doubt.\n";
            break;
        case 3:
            echo "Yes - definitely.\n";
            break;
        case 4:
            echo "You may rely on it.\n";
            break;
        case 5:
            echo "As I see it, yes.\n";
            break;
        case 6:
            echo "Most likely.\n";
            break;
        case 7:
            echo "Outlook good.\n";
            break;
        default:
            echo "Magic 8-Ball is unsure.\n";
            break;
    }
}


magic8Ball();
magic8Ball();
magic8Ball();
