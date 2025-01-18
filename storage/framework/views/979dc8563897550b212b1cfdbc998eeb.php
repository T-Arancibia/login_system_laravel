<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Registro</h1>
        <?php if($errors->any()): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('register.post')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700">Apellido</label>
                <input type="text" name="last_name" id="last_name" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo electrónico</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Telefono</label>
                <input type="phone" name="phone" id="phone" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded p-2" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
                Registrarse
            </button>
        </form>
        <p class="text-sm text-center mt-4">
            ¿Ya tienes cuenta? <a href="<?php echo e(route('login')); ?>" class="text-green-500 hover:underline">Inicia sesión aquí</a>
        </p>
    </div>
</body>
</html>
<?php /**PATH C:\Users\tomyb\OneDrive\Escritorio\NO_BORRAR\Proyectos_Tomy\Test\login_system\resources\views/auth/register.blade.php ENDPATH**/ ?>