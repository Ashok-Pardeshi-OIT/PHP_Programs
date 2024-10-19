<!-- Q:4) Create a class account(accno,cust_name). Derive two classes from account as saving_acc(balance, min_amount) and current_acc(balance, min_amount). Display a menu a) Saving Account b) Current Account For each of this display a menu with the following options. 1.Create account 2. Deposit 3. Withdrawal  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management System</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        class Account {
            public $accno;
            public $acc_name;
            public function __construct($accno, $acc_name) {
                $this->accno = $accno;
                $this->acc_name = $acc_name;
            }
            public function intro() {
                echo "The Account name is {$this->acc_name} and Account No is {$this->accno}.<br>";
            }
        }

        class SavingAcc extends Account {
            public $balance;
            public $min_amount;
            public function __construct($accno, $acc_name, $balance, $min_amount) {
                parent::__construct($accno, $acc_name);
                $this->balance = $balance;
                $this->min_amount = $min_amount;
            }
            public function intro() {
                echo "<table border='2'><tr><td>Account Name</td><td>Account No</td><td>Balance</td><td>Min Balance</td></tr>";
                echo "<tr><td>{$this->acc_name}</td><td>{$this->accno}</td><td>{$this->balance}</td><td>{$this->min_amount}</td></tr></table>";
            }
            public function deposit($amount) {
                $this->balance += $amount;
                echo "Deposited {$amount}. New Balance: {$this->balance}<br>";
            }
            public function withdrawal($amount) {
                if ($this->balance - $amount >= $this->min_amount) {
                    $this->balance -= $amount;
                    echo "Withdrew {$amount}. New Balance: {$this->balance}<br>";
                } else {
                    echo "Insufficient funds for withdrawal<br>";
                }
            }
        }

        class CurrentAcc extends Account {
            public $balance;
            public $min_amount;
            public function __construct($accno, $acc_name, $balance, $min_amount) {
                parent::__construct($accno, $acc_name);
                $this->balance = $balance;
                $this->min_amount = $min_amount;
            }
            public function intro() {
                echo "<table border='2'><tr><td>Account Name</td><td>Account No</td><td>Balance</td><td>Min Balance</td></tr>";
                echo "<tr><td>{$this->acc_name}</td><td>{$this->accno}</td><td>{$this->balance}</td><td>{$this->min_amount}</td></tr></table>";
            }
            public function deposit($amount) {
                $this->balance += $amount;
                echo "Deposited {$amount}. New Balance: {$this->balance}<br>";
            }
            public function withdrawal($amount) {
                if ($this->balance - $amount >= $this->min_amount) {
                    $this->balance -= $amount;
                    echo "Withdrew {$amount}. New Balance: {$this->balance}<br>";
                } else {
                    echo "Insufficient funds for withdrawal<br>";
                }
            }
        }

        $account_type = $_POST['account_type'];
        $operation = $_POST['operation'];
        $accno = $_POST['accno'];
        $acc_name = $_POST['acc_name'];
        $balance = (float) $_POST['balance'];
        $min_amount = (float) $_POST['min_amount'];
        $amount = isset($_POST['amount']) ? (float) $_POST['amount'] : 0;

        if ($account_type === 'saving') {
            $account = new SavingAcc($accno, $acc_name, $balance, $min_amount);
        } elseif ($account_type === 'current') {
            $account = new CurrentAcc($accno, $acc_name, $balance, $min_amount);
        } else {
            echo "Invalid account type<br>";
            exit;
        }

        if ($operation === 'create') {
            $account->intro();
        } elseif ($operation === 'deposit') {
            $account->deposit($amount);
            $account->intro();
        } elseif ($operation === 'withdrawal') {
            $account->withdrawal($amount);
            $account->intro();
        } else {
            echo "Invalid operation<br>";
        }
    } else {
        ?>
        <form action="#" method="post">
            <h3>Choose Account Type:</h3>
            <input type="radio" name="account_type" value="saving" required> Saving Account
            <input type="radio" name="account_type" value="current" required> Current Account
            <br>
            <h3>Choose Operation:</h3>
            <select name="operation" id="operation" required>
                <option value="create">Create</option>
                <option value="deposit">Deposit</option>
                <option value="withdrawal">Withdrawal</option>
            </select>
            <br>
            <label>Account Number:</label><br>
            <input type="text" name="accno" required><br>
            <label>Customer Name:</label><br>
            <input type="text" name="acc_name" required><br>
            <label>Initial Balance:</label><br>
            <input type="number" name="balance" required><br>
            <label>Minimum Amount:</label><br>
            <input type="number" name="min_amount" required><br>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
    }
    ?>
</body>
</html>