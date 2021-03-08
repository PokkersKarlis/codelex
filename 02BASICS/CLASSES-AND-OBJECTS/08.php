<?php declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 08
//Author - K.Pokkers

class SavingsAccount
{
    private float $startingBalance;
    private int $monthlyInterestRate;
    private int $deposit = 0;
    private float $interestEarned = 0;
    private int $withdraw = 0;

    public function __construct(int $startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }

    /**
     * @return float|int
     */
    public function getStartingBalance(): float
    {
        return $this->startingBalance;
    }

    public function addStartingBalance(int $deposit):void
    {
        $this->startingBalance += $deposit;
    }

    public function addDepositToBalance($deposit)
    {
        $this->startingBalance += $deposit;
    }

    /**
     * @param int $monthlyInterestRate
     */
    public function setMonthlyInterestRate(int $monthlyInterestRate): void
    {
        $this->monthlyInterestRate = $monthlyInterestRate;
    }

    /**
     * @return int
     */
    public function getMonthlyInterestRate(): int
    {
        return $this->monthlyInterestRate;
    }

    /**
     * @param int $deposit
     */
    public function setDeposit(int $deposit): void
    {
        $this->deposit += $deposit;
    }

    /**
     * @return int
     */
    public function getDeposit(): int
    {
        return $this->deposit;
    }

    /**
     * @param float|int $interestEarned
     */
    public function setInterestEarned($interestEarned): void
    {
        $this->interestEarned = $interestEarned;
    }

    /**
     * @return float|int
     */
    public function getInterestEarned()
    {
        return $this->interestEarned;
    }

    /**
     * @param int $withdraw
     */
    public function setWithdraw(int $withdraw): void
    {
        $this->withdraw = $withdraw;
    }

    /**
     * @return int
     */
    public function getWithdraw(): int
    {
        return $this->withdraw;
    }
}

do {
    $inputBalance = readline('How much money is in the account?:');
} while ($inputBalance < 0 || !is_numeric($inputBalance));
do {
    $inputInterest = readline('Enter the annual interest rate:');
}   while ($inputBalance < 0 || !is_numeric($inputBalance));
do {
    $inputTerm = readline('How long has the account been opened?');
}   while ($inputBalance < 0 || !is_numeric($inputBalance));

$startingBalance = new SavingsAccount((int)$inputBalance);
$startingBalance->setMonthlyInterestRate((int)$inputInterest);

for ($i = 1; $i <= $inputTerm; $i++){
    do {
        $deposit = readline('Enter amount deposited for month '.  $i. ': ');
    } while ($deposit < 0 || !is_numeric($deposit));
    do {
        $withdraw = readline('Enter amount withdrawn for '. $i. ': ');
    } while ($withdraw < 0 || !is_numeric($withdraw));

    $startingBalance->setDeposit((int)$deposit);
    $startingBalance->addDepositToBalance($deposit);

}

echo $startingBalance->getDeposit(). PHP_EOL;
echo $startingBalance->getStartingBalance(). PHP_EOL;
echo $startingBalance->getMonthlyInterestRate();


