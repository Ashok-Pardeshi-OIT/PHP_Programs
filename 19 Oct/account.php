<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Choose Account Type</h1>
        <input type="radio" id="saving" name="account_type" value="saving"> Saving Account
        <input type="radio" id="current" name="account_type" value="current"> Current Account
        <br><br>
        <select name="select_operation" id="select_operation">
            <option value="create">Create</option>
            <option value="deposit">Deposit</option>
            <option value="withdrawal">Withdrawal</option>
        </select>
        <br><br>
        <div id="create_fields" style="display:none;">
            <label for="accno">Account Number:</label>
            <input type="text" id="accno" name="accno"><br><br>
            <label for="cust_name">Customer Name:</label>
            <input type="text" id="cust_name" name="cust_name"><br><br>
            <label for="initial_amount">Initial Amount:</label>
            <input type="text" id="initial_amount" name="initial_amount"><br><br>
        </div>
        <div id="deposit_fields" style="display:none;">
            <label for="accno_deposit">Account Number:</label>
            <input type="text" id="accno_deposit" name="accno_deposit"><br><br>
            <label for="deposit_amount">Deposit Amount:</label>
            <input type="text" id="deposit_amount" name="deposit_amount"><br><br>
        </div>
        <div id="withdrawal_fields" style="display:none;">
            <label for="accno_withdraw">Account Number:</label>
            <input type="text" id="accno_withdraw" name="accno_withdraw"><br><br>
            <label for="withdraw_amount">Withdrawal Amount:</label>
            <input type="text" id="withdraw_amount" name="withdraw_amount"><br><br>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        document.getElementById('select_operation').addEventListener('change', function() {
            var createFields = document.getElementById('create_fields');
            var depositFields = document.getElementById('deposit_fields');
            var withdrawalFields = document.getElementById('withdrawal_fields');
            createFields.style.display = 'none';
            depositFields.style.display = 'none';
            withdrawalFields.style.display = 'none';

            if (this.value === 'create') {
                createFields.style.display = 'block';
            } else if (this.value === 'deposit') {
                depositFields.style.display = 'block';
            } else if (this.value === 'withdrawal') {
                withdrawalFields.style.display = 'block';
            }
        });
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $account_type = $_POST['account_type'];
        $operation = $_POST['select_operation'];

        class Account {
            public $accno;
            public $cust_name;

            public function __construct($accno, $cust_name) {
                $this->accno = $accno;
                $this->cust_name = $cust_name;
            }

            function display() {
                echo "Account Number: $this->accno <br>";
                echo "Customer Name: $this->cust_name <br>";
            }
        }

        class Saving_Account extends Account {
            public $balance;
            public $min_amount;

            public function __construct($accno, $cust_name, $balance, $min_amount) {
                parent::__construct($accno, $cust_name);
                $this->balance = $balance;
                $this->min_amount = $min_amount;
            }

            public function create() {
                echo "Saving Account Created<br>";
                $this->display();
                echo "Balance: $this->balance <br>";
                echo "Minimum Amount: $this->min_amount <br>";
            }

            public function deposit($amount) {
                $this->balance += $amount;
                echo "Deposit Successful<br>";
                echo "New Balance: $this->balance <br>";
            }

            public function withdraw($amount) {
                if ($this->balance >= $amount) {
                    $this->balance -= $amount;
                    echo "Withdrawal Successful<br>";
                    echo "New Balance: $this->balance <br>";
                } else {
                    echo "Insufficient Balance<br>";
                }
            }
        }

        class Current_Account extends Account {
            public $balance;
            public $min_amount;

            public function __construct($accno, $cust_name, $balance, $min_amount) {
                parent::__construct($accno, $cust_name);
                $this->balance = $balance;
                $this->min_amount = $min_amount;
            }

            public function create() {
                echo "Current Account Created<br>";
                $this->display();
                echo "Balance: $this->balance <br>";
                echo "Minimum Amount: $this->min_amount <br>";
            }

            public function deposit($amount) {
                $this->balance += $amount;
                echo "Deposit Successful<br>";
                echo "New Balance: $this->balance <br>";
            }

            public function withdraw($amount) {
                if ($this->balance >= $amount) {
                    $this->balance -= $amount;
                    echo "Withdrawal Successful<br>";
                    echo "New Balance: $this->balance <br>";
                } else {
                    echo "Insufficient Balance<br>";
                }
            }
        }

        if ($account_type == 'saving') {
            $account = new Saving_Account($_POST['accno'], $_POST['cust_name'], $_POST['initial_amount'], 500);
        } else {
            $account = new Current_Account($_POST['accno'], $_POST['cust_name'], $_POST['initial_amount'], 1000);
        }

        switch ($operation) {
            case 'create':
                $account->create();
                break;
            case 'deposit':
                $account->deposit($_POST['deposit_amount']);
                break;
            case 'withdrawal':
                $account->withdraw($_POST['withdraw_amount']);
                break;
        }
    }
    ?>
</body>
</html>
