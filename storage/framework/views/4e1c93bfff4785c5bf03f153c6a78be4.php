<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jobbox</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10 ">
            <div>
                <a href="/">
                    <h2 class="text-white font-bold">jobbox</h2>
                </a>
            </div>
            <div class="space-x-6 font-bold">
               <a href="">Jobs</a>
               <a href="">Careers</a>
               <a href="">Salary</a>
               <a href="">Companies</a>
            </div>

            <?php if(auth()->guard()->check()): ?>
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a job</a>

                <form method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button>Logout</button>
                </form>
            </div>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Login</a>
             </div> 
            <?php endif; ?>
        </nav>
        
        
        <main class="mt-10 max-w-[986px] mx-auto">
         <?php echo e($slot); ?>  
        </main>
    </div>
    
</body>
</html><?php /**PATH C:\Users\USER\Herd\jobbox\resources\views/components/layout.blade.php ENDPATH**/ ?>