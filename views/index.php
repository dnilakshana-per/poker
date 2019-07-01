<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Poker Chance Calculator</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-4.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        function confirmMessage() {
            var result = confirm("Want to Reset?");
            if (result) {
                window.location.href ='reset/index';
            }
        }
    </script>
</head>
<body>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Poker Chance Calculator</h1>
</div>

<form action="draft/save" method="post" id="draft-form">
    <div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Suit</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <?php require 'views/cards/suit.php'; ?>
                </div>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Rank</h4>
            </div>
            <div class="card-body">
                <?php require 'views/cards/rank.php'; ?>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Percentage</h4>
            </div>
            <div class="card-body">
                <?php require 'views/draft/percentage.php'; ?>
            </div>
        </div>
    </div>
    <?php require 'views/draft/drafted.php'; ?>
</div>
</form>
</body>
</html>