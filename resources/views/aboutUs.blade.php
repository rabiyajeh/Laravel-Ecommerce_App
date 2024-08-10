<!-- resources/views/aboutUs.blade.php -->

@extends('layouts.base')

@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo2.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        h1 {
            font-size: 2.5em;
            color: #ff8c00; /* Orange color */
            margin-bottom: 30px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        a {
            color: #ff8c00; /* Orange color */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .quote {
            font-style: italic;
            color: #888;
        }

        .cta-section {
            margin-top: 50px;
            text-align: center;
        }

        .cta-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff8c00; /* Orange color */
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #e07d00; /* Slightly darker shade */
        }

        .contact-section {
            margin-top: 50px;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .contact-info div {
            text-align: center;
            margin: 10px;
        }

        .contact-info i {
            font-size: 2em;
            color: #ff8c00; /* Orange color */
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1>About Us</h1>
                <p>
                    Welcome to our e-commerce store. We are passionate about delivering an exceptional shopping experience to our customers. Our mission is to provide high-quality products, seamless service, and a secure online environment.
                </p>
                <p>
                    Explore our diverse range of products, covering the latest fashion trends, cutting-edge electronic gadgets, and essential home items. We strive to cater to your every need, ensuring a one-stop solution for all your online shopping desires.
                </p>
                <p class="quote">
                    "Customer satisfaction is our top priority. We aim to exceed expectations and make your online shopping journey enjoyable and hassle-free."
                </p>
            </div>
        </div>

        <div class="cta-section">
            <h2>Ready to start shopping with us?</h2>
            <a href="{{ route('shop.index') }}" class="cta-btn">Explore Products</a>
        </div>

        <div class="contact-section">
            <h2 class="text-center">Contact Information</h2>
            <div class="contact-info">
                <div>
                    <i class="fas fa-envelope"></i>
                    <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <p>Phone: +1 (123) 456-7890</p>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Address: 123 Main Street, Cityville</p>
                </div>
            </div>
        </div>
    </div>
@endsection
