<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Perfil del Usuario</h1>
        <p class="text-gray-700 mb-4">Nombre: <strong><?php echo e($user->name); ?></strong></p>
        <p class="text-gray-700 mb-4">Apellido: <strong><?php echo e($user->last_name); ?></strong></p>
        <p class="text-gray-700 mb-4">Telefono: <strong><?php echo e($user->phone); ?></strong></p>
        <p class="text-gray-700 mb-4">Correo electrónico: <strong><?php echo e($user->email); ?></strong></p>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600">
                Cerrar Sesión
            </button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\tomyb\OneDrive\Escritorio\NO_BORRAR\Proyectos_Tomy\Test\login_system\resources\views/auth/profile.blade.php ENDPATH**/ ?>