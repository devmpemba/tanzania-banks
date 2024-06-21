# Tanzania Banks Library

This PHP library provides a list of banks in Tanzania along with their branches and SWIFT codes.

## Installation

Install the library via Composer:

```bash
composer require salymmbise/tanzania-banks
```

## Example Usage

```bash
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

## Methods
getBanks()
Returns an array of all banks available in Tanzania.

$banks = $bankList->getBanks();

getSwiftCode($bank, $branch)
Returns the SWIFT code for a specific branch of a bank.

$swiftCode = $bankList->getSwiftCode('National Bank of Commerce', 'Dar es Salaam - Corporate Branch');

```


# License
This project is licensed under the MIT License - see the LICENSE file for details.
