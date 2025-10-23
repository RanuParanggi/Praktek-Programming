<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ToDo App')</title>

    {{-- Google Fonts & Boxicons --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        nav {
            background-color: rgba(255,255,255,0.3);
            backdrop-filter: blur(8px);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav h2 {
            color: #333;
            font-weight: 700;
        }

        .btn-create {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-create:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .todo-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .todo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .todo-card.completed {
            border-left: 5px solid #00c853;
            background: #e8f5e9;
        }

        .todo-card.pending {
            border-left: 5px solid #ffb300;
            background: #fff8e1;
        }

        .todo-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .todo-actions button {
            border: none;
            border-radius: 8px;
            margin-left: 5px;
            padding: 6px 10px;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-edit { background-color: #29b6f6; color: white; }
        .btn-delete { background-color: #e53935; color: white; }
        .btn-done { background-color: #66bb6a; color: white; }
        .btn-edit:hover, .btn-delete:hover, .btn-done:hover {
            opacity: 0.8;
        }

        .status {
            font-size: 0.9em;
            font-weight: 600;
        }

        .status.done { color: #2e7d32; }
        .status.todo { color: #f57f17; }
    </style>
</head>
<body>

    <nav>
        <h2>✨ My ToDo Board</h2>
        <a href="{{ route('todos.create') }}" class="btn-create"><i class='bx bx-plus'></i> Buat ToDo</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
