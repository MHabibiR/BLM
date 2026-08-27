<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'BLM FIK')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <style>
        .grid-pattern {
            background-image: linear-gradient(to right, #e2e8f0 1px, transparent 1px),
                              linear-gradient(to bottom, #e2e8f0 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
    <!-- TopNavBar Component -->
    <header class="bg-surface-container-lowest dark:bg-surface-container-lowest docked full-width top-0 border-b border-outline-variant dark:border-outline-variant flat no shadows sticky z-50">
        <div class="flex justify-between items-center w-full px-margin-desktop max-w-max-width mx-auto h-16">
            <div class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed-dim">
                BLM FIK
            </div>
            <nav class="hidden md:flex gap-lg">
                <a class="font-body-md text-body-md text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1 hover:text-primary dark:hover:text-primary-fixed transition-colors" href="{{ url('/') }}">Home</a>
                <a class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors" href="{{ url('/bem') }}">BEM Monitoring</a>
                <a class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors" href="{{ url('/student') }}">Student Aspirations</a>
                <a class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors" href="{{ url('/blm') }}">BLM Dashboard</a>
            </nav>
            <div class="flex items-center gap-md">
                <button class="bg-primary-container text-on-primary px-lg py-sm rounded hover:opacity-90 transition-opacity font-label-md text-label-md">
                    Login
                </button>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Component -->
    <footer class="bg-primary dark:bg-primary-container full-width bottom-0 bg-primary dark:bg-primary-container flat no shadows w-full py-lg px-margin-desktop mt-auto border-t border-primary-container">
        <div class="max-w-max-width mx-auto flex flex-col md:flex-row justify-between items-center gap-md">
            <div class="font-headline-sm text-headline-sm text-on-primary">
                © 2024 BLM FIK. Faculty of Computer Science.
            </div>
            <nav class="flex gap-lg">
                <a class="font-body-sm text-body-sm text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-colors" href="#">Contact Us</a>
                <a class="font-body-sm text-body-sm text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-colors" href="#">Privacy Policy</a>
                <a class="font-body-sm text-body-sm text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-colors" href="#">University Portal</a>
            </nav>
        </div>
    </footer>
</body>
</html>
