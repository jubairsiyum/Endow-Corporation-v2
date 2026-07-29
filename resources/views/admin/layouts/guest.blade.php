<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Login') — Endow Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;450;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand:  { DEFAULT: '#EF4444', light: '#F87171', dark: '#DC2626' },
                        surface: { DEFAULT: '#151A21', hover: '#1D232D' },
                        bg:     { DEFAULT: '#0B0F14' },
                    },
                    fontFamily: { sans: ['Inter','system-ui','sans-serif'] },
                }
            }
        }
    </script>
    <style>
        body {
            background: #0B0F14;
            color: #F1F5F9;
            font-family: 'Inter', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .auth-bg {
            background:
                radial-gradient(ellipse 80% 50% at 50% -20%, rgba(239,68,68,0.06), transparent),
                radial-gradient(ellipse 60% 40% at 50% 120%, rgba(139,92,246,0.04), transparent),
                #0B0F14;
        }
    </style>
</head>
<body class="auth-bg font-sans antialiased min-h-screen flex items-center justify-center p-4">

    @yield('content')

</body>
</html>

