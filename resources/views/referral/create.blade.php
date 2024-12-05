<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Referral</title>
</head>
<body>
    <h1>Record Referral</h1>
    <form method="POST" action="/referrals">
        @csrf
        <label for="referrer_id">Referrer ID:</label>
        <input type="number" id="referrer_id" name="referrer_id" placeholder="Enter referrer ID" required>
        <br>
        <label for="referred_id">Referred ID:</label>
        <input type="number" id="referred_id" name="referred_id" placeholder="Enter referred ID" required>
        <br>
        <button type="submit">Record Referral</button>
    </form>
</body>
</html>
