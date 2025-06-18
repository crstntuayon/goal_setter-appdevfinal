<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .centered-div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background-color: #f8f9fa;
        }
        
        .main-container {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-height: 100vh;
            overflow-y: auto;   
            padding: 1.25rem;
            background-color: #f8f9fa;
            border-radius: 0.5rem;      
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;    
            width: 80vh;
            max-width: 600px;
        }
        
        .card {
            margin: 1rem 0;
            width: 100%;
            background-color: #ffffff;
            padding: 1.25rem;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
        }
        
        .card-header {
            background-color: #f8f9fa;
            border-radius: 0.375rem 0.375rem 0 0;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;      
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background-color: #e9ecef;
            border-bottom: 1px solid #ced4da;
            padding: 0.75rem 1.25rem;
        }
        
        .card-header h4 {
            float: left;
            margin: 0;
            font-size: 1.25rem;
            font-weight: bold;
            color: #212529;

        }
        
        .alert {
            margin: 1rem 1.25rem 0;
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem;
            opacity: 1;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            position: relative;
            transition: opacity 0.5s ease;

        }
        
        .card-body {
            padding: 1.25rem;
            background-color: #ffffff;
            border-radius: 0 0.375rem 0.375rem 0.375rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-top: 1px solid #dee2e6;
            padding: 1.25rem;
            background-color: #f8f9fa;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .form-label {
            font-weight: 500;
            color: #495057;
            font-size: 1rem;
            margin-bottom: 0.5rem;

        }
        
        .form-control {
            border: 1px solid #ced4da;
            font-size: 1rem;
            color: #495057;
            background-color: #ffffff;
            height: calc(1.5em + 0.75rem + 2px);
            line-height: 1.5;
            border: 1px solid #ced4da;
            box-shadow: none;
            border-radius: 0.375rem;
            padding: 0.375rem 0.75rem;
        }
        
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            outline: none;

        }
        
        .btn-primary {
            background-color: #0d6efd;
            color: #ffffff;
            border: 1px solid #0d6efd;
            box-shadow: none;
            border-width: 1px;
            border-style: solid;
            border-radius: 0.375rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            margin-top: 1rem;
            width: 100%;
            border-color: #0d6efd;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.375rem;
        }
        
        .btn-primary:hover {
            background-color: #0b5ed7;
            color: #ffffff;
            border-color: #0b5ed7;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            text-decoration: none;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            background-color: #0a58ca;
            border: 1px solid #0a58ca;
            border-color: #0a58ca;
        }
        
        .text-danger {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .register-link {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.875em;
            color: #6c757d;
            text-decoration: none;
            display: inline-block;
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            width: 100%;
            text-align: center;
            margin-top: 1rem;
            font-size: 1rem;
            border-radius: 0.375rem;
            padding: 0.375rem 0.75rem;
            display: block;

        }
        
        .register-link a {
            color: #0d6efd;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.15s ease-in-out;
            display: inline-block;
            width: 100%;
            text-align: center;
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            font-size: 1rem;
        }
        
        .register-link a:hover {
            text-decoration: underline;
            color: #0a58ca;
            background-color: #e9ecef;
            border-color: #adb5bd;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            color: #0a58ca;
            background-color: #e9ecef;
            border: 1px solid #adb5bd;
        }
    </style>
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    body {
        background-color: #f8f9fa;
        align-items: center;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
    }

   

   
</style>

</body>

</html>