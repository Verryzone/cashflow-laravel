<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h1 class="text-2xl font-bold text-center text-gray-700">Welcome Back</h1>
    <p class="text-sm text-gray-500 text-center mt-2">Please log in to your account</p>
    <form class="mt-6">
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="you@example.com"
          required>
      </div>
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="********"
          required>
      </div>
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        Log In
      </button>
    </form>
    <p class="text-center text-sm text-gray-500 mt-6">
      Don't have an account? 
      <a href="#" class="text-blue-500 hover:underline">Sign up</a>
    </p>
  </div>
</body>
</html>
