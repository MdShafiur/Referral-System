<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Referral System</title>
</head>
<body>
    <h1>Welcome to the Referral System</h1>
    <ul>
        <li><a href="/users/create">Add New User</a></li>
        <li><a href="/referrals/create">Record Referral</a></li>
    </ul>

    <h2>View Referrals for a User</h2>
    <form action="/users/referrals" method="GET">
        <label for="user_id">Enter User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        <button type="submit">View Referrals</button>
    </form>

    @if(isset($referralData))
        <h3>Referral Data for User ID: {{ $referralData['user_id'] }}</h3>
        <p><strong>Total Referrals:</strong> {{ $referralData['referral_count'] }}</p>
        <p><strong>Total Bonus:</strong> RM{{ $referralData['bonus_balance'] }}</p>
    @elseif(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif
</body>
</html>
