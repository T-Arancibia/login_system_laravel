<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Iniciar Sesión</h1>
        <?php if($errors->any()): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('login.post')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo electrónico</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                Iniciar Sesión
            </button>
        </form>
        <p class="text-sm text-center mt-4">
            ¿No tienes cuenta? <a href="<?php echo e(route('register')); ?>" class="text-blue-500 hover:underline">Regístrate aquí</a>
        </p>
    </div>
</body>
</html><?php /**PATH C:\Users\tomyb\OneDrive\Escritorio\NO_BORRAR\Proyectos_Tomy\Test\login_system\resources\views/auth/login.blade.php ENDPATH**/ ?>