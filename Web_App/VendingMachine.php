<?php
function VendingMachine(){ #This line of code holds the function for the vending machine layout, the '{' symbol opens the function leaving anything inside the brackets part of the function
    Print("-----------------------------------------------------------------" . "\n"); #This line of dash symbols is used to create a line which is used to form a layout for the vending machine table
    Print("|          Welcome to Jacob Cleaver's Vending Machine           |" . "\n"); #This is another print line which will output the contents within the speech marks in this case the header for the table
    Print("-----------------------------------------------------------------" . "\n"); #Here is another structure line
    Print("|       1       |       2       |       3       |       4       |" . "\n"); #This line holds the product ID numbers and '|' which is used a divider between each product
    Print("|      Mars     |   Milky Way   |     Wispa     |      Twix     |" . "\n"); #The content of this print is the product name
    Print("|     £0.60     |     £0.55     |     £0.65     |     £0.60     |" . "\n"); #This line is the prices for each product
    Print("-----------------------------------------------------------------" . "\n"); #This print line is the next border before the next row
    Print("|       5       |       6       |       7       |       8       |" . "\n"); #Here is the ProductID numbers 5 through to 8
    Print("|    Skittles   | Fruit Pastels |   Starburst   |     M'n'Ms    |" . "\n"); #Second vending machine row of goods
    Print("|     £0.45     |     £0.40     |     £0.40     |     £0.55     |" . "\n"); #Prices for the second row
    Print("-----------------------------------------------------------------" . "\n"); #Another Layout line
    Print("|       9       |       10      |       11      |       12      |" . "\n"); #9 to 12 of 24
    Print("|    Doritos    |    Walkers    |     McCoys    |  Kettle Chips |" . "\n"); #Row of crisps within the machine
    Print("|     £0.65     |     £0.50     |     £0.65     |     £0.70     |" . "\n"); #Prices for each of the crisps
    Print("-----------------------------------------------------------------" . "\n"); #This is a line to help with separation
    Print("|       13      |       14      |      15       |       16      |" . "\n"); #This line holds product numbers 13 to 16
    Print("|   Flap Jack   |  Protein Bar  |     Apple     | Fruit Nuggets |" . "\n"); #Here is the healthy row of food
    Print("|     £0.75     |     £1.00     |     £0.35     |     £0.45     |" . "\n"); #And here are the prices they cost
    Print("-----------------------------------------------------------------" . "\n"); #Another of the structural lines
    Print("|       17      |       18      |      19       |       20      |" . "\n"); #17 to 20 holding the fizzy drinks
    Print("|   Coca-Cola   |   Diet Coke   |    Sprite     |     Fanta     |" . "\n"); #Drink names
    Print("|     £1.00     |     £1.00     |     £1.00     |     £1.00     |" . "\n"); #Drink prices
    Print("-----------------------------------------------------------------" . "\n"); #This is a line of dashes to make up a line to provide a tabke structure
    Print("|       21      |       22      |      23       |       24      |" . "\n"); #This is the last row of the vending machine, numbers 21 to 24
    Print("|      Tea      |     Coffee    |     Water     | Orange Juice  |" . "\n"); #The last row is a row of hot and cold drinks
    Print("|     £1.10     |     £1.15     |     £0.80     |     £0.30     |" . "\n"); #Here are the prices for the drinks
    Print("-----------------------------------------------------------------" . "\n"); #Finally, the last line to finish the tabe

    Print("Current Credit £0.00" . "\n"); #This is a print line which will output everything in the speech marks - this states the user begins at £0.00
    Print("Would You Like To Add Credit? (Yes (Y) / No (N)): "); #Here is another print line goving the user an option to add credit
    $AddCredit = readline(); #readline is used to read what is typed next to the question asked
    if ($AddCredit == "Y") { #This is stating that if Y is entered to suggest yes they want to add credit then they will be asked to input credit
        AddCredit(); #This links the AddCredit() function
    } #This is the end to the if statement above
} #Here is the last closed brakets to finish the Vending Machine function
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddCredit(){ #This is the start of a new function call AddCredit which will be focussing on ensuring the user can add money to pay for the goods
    $AddCredit = readline("Please Input Credit Here (0.05(5p) 0.10(10p) 0.20(20p) 0.50(50p) 1.00(£1) 2.00(£2):" . "\n"); #This line uses a read_line function which reads the users input and uses it
    $Credit = number_format($AddCredit,2); #This variable called Credit is using the number format to take the value of the inputted credit
    Print("Your Current Balance is: £" . $Credit . "\n"); #When this line reads the statement the credit will constantly be relevant to the users choices
    ProductID($Credit); #This links the ProductID numbers with the Credit allowing for calculations to be carried out
} # This closes off the Add Credit function
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ProductID($Credit){ #This line is the start of a new function which will relate the product ID numbers with the price of each product
    $Price = array(); #This sets the data out into an array
    #This section is the top row of the machine holding the chocolate bare
    $Price['1'] = number_format(0.60, 2); #Mars Bar
    $Price['2'] = number_format(0.55, 2); #Milky Way
    $Price['3'] = number_format(0.65, 2); #Wispa
    $Price['4'] = number_format(1.60, 2); #Twix
    //////////////////////////////////////
    #This is the second row down and holds the sweets
    $Price['5'] = number_format(0.45, 2); #Skittles
    $Price['6'] = number_format(0.40, 2); #Fruit Pastels
    $Price['7'] = number_format(0.40, 2); #Starburst
    $Price['8'] = number_format(0.55, 2); #M 'n' Ms
    //////////////////////////////////////
    #This row is for the crsips
    $Price['9'] = number_format(0.65, 2); #Doritos
    $Price['10'] = number_format(0.50, 2); #Walkers
    $Price['11'] = number_format(0.65, 2); #McCoys
    $Price['12'] = number_format(0.70, 2); #Kettle Crisps
    ///////////////////////////////////////
    #Here is the row for the healthy products
    $Price['13'] = number_format(0.75, 2); #FlapJack
    $Price['14'] = number_format(1.00, 2); #Protein Bar
    $Price['15'] = number_format(0.35, 2); #Apple
    $Price['16'] = number_format(0.45, 2); #Fruit Nugget
    ///////////////////////////////////////
    #Soft drinks aisle
    $Price['17'] = number_format(1.00, 2); # Coca-Cola
    $Price['18'] = number_format(1.00, 2); # Diet Coke
    $Price['19'] = number_format(1.00, 2); # Sprite
    $Price['20'] = number_format(1.00, 2); #Fanta
    ///////////////////////////////////////
    #The final row is to hold the drinks such as tea and coffee\
    $Price['21'] = number_format(1.10, 2); #Tea
    $Price['22'] = number_format(1.15, 2); #Coffee
    $Price['23'] = number_format(0.80, 2); #Water
    $Price['24'] = number_format(0.30, 2); #Orange Juice

    $ProductID = readline("Please Choose Your Item Number:" . "\n"); #This line informs the user to choose the product number they want
    if ($ProductID > 24) {
        Print("Choose Between 1-24" . "\n");
        $ProductID = readline("Please Choose Your Item Number:" . "\n"); #This line informs the user to choose the product number they want
    }
    Print("£" . $Price[$ProductID] . "\n"); #Here the line is being printed with the product data and IDs

    Print("Please Confirm Your Choice? (Yes (Y) / No (N)): "); #This line provides the users with a choice of confirming their pick or cancelling and retrieving their money
    $Confirm = readline(); #This allows for the user's input to be read and used using the readline()
    if ($Confirm == "Y") { #This part of the code is sayig if the user typed Y for yes then carry out the code inside the brackets if it was N then move onto the else if
        if ($Credit >= $Price[$ProductID]) { #The if statement is showing that in order for the user to purchase the item the credit has to be greater than or equal to the product price
            $UpdatedCredit = $Credit - $Price[$ProductID]; #Once the user has bought the product then this is the sum that generates the updated credit balance by minusing the product prince from the credit
            Print("Your new balance is: £" . number_format($UpdatedCredit, 2) . "\n"); #This now prints the latest calculation of the new credit balance
        } else { #However, if there isn't enouhg credit in the users account when they confimr to by the product this will inform them otherwise and re-direct them to adding credit
            Print("Sorry You Don't Have Enough Credit" . "\n");
            Print("Your Credit Is Still £0.00" . "\n");
            AddCredit(); #This re-directs back to adding credit
        }
    }
    else if ($Confirm == "N") { #If the user had not confirmed the purchase they will be refunded and exited allowing them to start again
        if ($Credit > 0) { #The if statement is looking at whether the updated balance is greater than 0 and if it is then the following code can be run
            Print("Your Remaining Credit Of £"); #This is a print line which will print the speech marks content
            Print($Credit); #This is the credit left in the user's account ready to be refunded
            Print(" Has Been Refunded" . "\n"); #This is a print line which will print the speech marks content
        } #
        Print("Thank You" . "\n"); #This is a print line which will print the speech marks content
        Print("Good Bye" . "\n"); #This is a print line which will print the speech marks content
        Exit; #Here is the key word which exits the application
    }

        Print("Would you like another item? (Yes (Y) / No (N)): "); #Here is the ability to buy another item once the first has been completed
        $SecondItem = readline(); #Again the readline is used to recall the users input
        if ($SecondItem == "Y") { #If the users said yes then it can move onto the code inside the brackets
            if ($Credit < 0.30) { #However, if the credit is less than 0.30 (30p) they will be asked to add credit
                AddCredit(); #This links back to the add credit function
            } else { #On the other hand, if the user has credit over 0.30 then they will be directed straight onto the choosing of the item number
                $ProductID = readline("Please Choose Your Item Number:" . "\n"); #This line informs the user to choose the product number they want
                if ($ProductID > 24) { #This statement is checking whether the product ID number is higher than 24
                    Print("Choose Between 1-24" . "\n"); #If the number entered is higher than 24 then this message appears
                    $ProductID = readline("Please Choose Your Item Number:" . "\n"); #This line informs the user to choose the product number they want
                }
                Print("£" . $Price[$ProductID] . "\n"); #Here the line is being printed with the product data and IDs
                Print("Please Confirm Your Choice? (Yes (Y) / No (N)): "); #This line provides dialogue with the user using a print function confirming with the user that they are happy with their decision
                $Confirm = readline(); #Here is the ability to refer with the users input to the confirmation
                if ($Confirm == "Y") { #If the user inputted yes then the if statement is saying use the code inside the brackets but if the user said no then move to the else statement
                    if ($Credit >= $Price[$ProductID]) { #This if statement is ensuring that the credit is greater than or equal to the price of the product in order for the purchase to take place
                        $UpdatedCredit = $Credit - $Price[$ProductID]; #This is calculating the updated credit via taking the
                        Print("Your new balance is: £" . number_format($UpdatedCredit, 2) . "\n"); #Here is a print line which is informing the user of their new credit balance using number formats and the updated calculated credit
                    } else { #However, if the credit is less than the price of the product trying to be bought then the user will re-directed here
                        Print("Sorry You Don't Have Enough Credit" . "\n"); #This is where they will be told they don't have enough credit
                        AddCredit(); #And they will be taken to the add credit function
                    } #This closes the else statement
                } #Here is the closing bracket for the if $confirm == "Y"
            } # And this is another else statment closing bracket
        } else if ($SecondItem == "N") { #This is the second half to the confirmation, this is if the user entered "N'
            if ($UpdatedCredit > 0) { #The if statement is looking at whether the updated balance is greater than 0 and if it is then the following code can be run
                Print("Your Remaining Credit Of £"); #Here is a print line telling the user the remaing credit is...
                Print($UpdatedCredit); #Now this will fill in after the pound sign of the previous line
                Print(" Has Been Refunded" . "\n"); #And to finish the lign off this third print function will conclude the sentence
            } #This is the if statement closing bracket
            Print("Thank You" . "\n"); #This print is thanking the user
            Print("Good Bye" . "\n"); #Followed by a good bye
            Exit; #The use of the word exit removes the user from the vending machine preventing any issues
        } #This curly bracket ends the else if statement
    } #While this bracket closes the doors to the ProductID function
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Finish($UpdatedCredit){ #This is the creation of another function
    if ($UpdatedCredit > 0) { #The if statement is looking at whether the updated balance is greater than 0 and if it is then the following code can be run
        Print("Your Remaining Credit Of £"); #If the credit is higher than 0 then this print script will be printed
        Print($UpdatedCredit); #Along with the current credit balance
        Print(" Has Been Refunded" . "\n"); #And the final aspects of the sentece
        Print("Thank You" . "\n"); #Followed by a kind thank you
        Print("Good Bye" . "\n"); #And a good bye
    } else { #Although if the credit is less than 0 there will be no credit to refund so they jump straight to the final two pint codes
        Print("Thank You" . "\n"); #This is if the credit is less than 0 the user will have no crddit back but a thank you
        Print("Good Bye" . "\n"); #And a good bye
    } #This closes the else function
} #Whilst this bracket closes the finish function

VendingMachine();
