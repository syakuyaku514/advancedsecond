<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>管理者画面です</h1>

    <!-- ログインボタン -->
    <form action="{{ route('admin.logout') }}" method="POST">
    @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>