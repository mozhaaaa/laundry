    <style>
        .footer-section {
            background-color: #FDF5E6; 
            color: #6c757d;
            border-top: 1px solid #E8DAB2; 
        }
        .footer-title {
            color: #495057;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .footer-link {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-link:hover {
            color: #495057;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            background-color: #F0E8D2; 
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .social-icon:hover {
            background-color: #E8DAB2;
            transform: translateY(-2px);
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .contact-icon {
            width: 20px;
            height: 20px;
            margin-right: 0.75rem;
            color: #495057;
        }
        .copyright {
            background-color: #FDF5E6; 
            border-top: 1px solid #E8DAB2;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <footer class="footer-section">
        <div class="container py-5">
            <div class="row">
                <!-- Kolom 1: Info Perusahaan -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-title">
                        <i class="fas fa-spa me-2"></i>Clean Laundry
                    </h5>
                    <p class="text-muted mb-4">
                        Layanan laundry profesional dengan standar kebersihan tinggi. Kami menjaga pakaian Anda seperti milik kami sendiri, cepat, bersih, dan wangi segar.
                    </p>
                    
                </div>

                <!-- Kolom 2: Tautan Cepat -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-title">Tautan Cepat</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Layanan</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Harga</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>FAQ</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Blog</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Layanan -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="footer-title">Layanan Kami</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Cuci Kering</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Setrika</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Cuci Karpet</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Pickup & Delivery</a></li>
                        <li class="mb-2"><a href="#" class="footer-link"><i class="fas fa-chevron-right me-2"></i>Cuci Sepatu</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="footer-title">Hubungi Kami</h6>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <span>Jl. Sudirman No. 123, Jakarta Selatan</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <span>+62 21-12345678</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span>info@cleanlaundry.co.id</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock contact-icon"></i>
                        <span>Buka 24/7</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">&copy; 2025 Clean Laundry. Semua hak dilindungi.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="footer-link me-3">Kebijakan Privasi</a>
                        <a href="#" class="footer-link">Syarat Layanan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>