# Tanzania Banks Library

This PHP library provides a list of banks in Tanzania along with their branches and SWIFT codes.

## Installation

Install the library via Composer:

```bash
composer require salymmbise/tanzania-banks
Usage
Example Usage

<?php

require 'vendor/autoload.php';

use Salymmbise\TanzaniaBanks\BankList;

// Instantiate the BankList class
$bankList = new BankList();

// Get all banks
$banks = $bankList->getBanks();
echo "Banks in Tanzania:\n";
print_r($banks);

// Get branches for National Bank of Commerce
$branches = $bankList->getBranches('National Bank of Commerce');
echo "\nBranches of National Bank of Commerce:\n";
print_r($branches);

// Get SWIFT code for a specific branch of National Bank of Commerce
$swiftCode = $bankList->getSwiftCode('National Bank of Commerce', 'Dar es Salaam - Corporate Branch');
echo "\nSWIFT Code of National Bank of Commerce Dar es Salaam - Corporate Branch:\n";
echo $swiftCode . "\n";

// Get branches for CRDB Bank
$branches = $bankList->getBranches('CRDB Bank');
echo "\nBranches of CRDB Bank:\n";
print_r($branches);

// Get SWIFT code for a specific branch of CRDB Bank
$swiftCode = $bankList->getSwiftCode('CRDB Bank', 'Dar es Salaam - Azikiwe Branch');
echo "\nSWIFT Code of CRDB Bank Dar es Salaam - Azikiwe Branch:\n";
echo $swiftCode . "\n";
Methods
getBanks()
Returns an array of all banks available in Tanzania.


$banks = $bankList->getBanks();
getBranches($bank)
Returns an array of branches for a specified bank.


$branches = $bankList->getBranches('National Bank of Commerce');
getSwiftCode($bank, $branch)
Returns the SWIFT code for a specific branch of a bank.


$swiftCode = $bankList->getSwiftCode('National Bank of Commerce', 'Dar es Salaam - Corporate Branch');
License
This project is licensed under the MIT License - see the LICENSE file for details.

Instructions
Copy the entire text starting from # Tanzania Banks Library down to the end (## License section).

Create a new file named README.md in the root directory of your GitHub repository where your PHP library is hosted.

Paste the copied content into the README.md file.

Save the file.

This README.md file now contains comprehensive information for users about your TanzaniaBanks library, including how to install it, how to use it with example code snippets, details about available methods, and licensing information. Adjust the content as needed to fit any additional features or updates you make to your library in the future.



### Instructions

1. **Copy the entire content** from the provided Markdown text above.

2. **Create a new file** named `README.md` in the root directory of your GitHub repository where your PHP library (`salymmbise/tanzania-banks`) is hosted.

3. **Paste** the copied content into the `README.md` file.

4. **Save** the file.

This consolidated `README.md` file now includes all the sections you requested: headers, installation instructions, example usage, method descriptions, and license details. Users will find it comprehensive and easy to understand when they visit your GitHub repository. Adjust the example usage, method descriptions, and any other details as per your actual implementation and features of the `TanzaniaBanks` library.





