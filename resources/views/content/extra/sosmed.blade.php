@extends('layout.main')

@section('container')
    <style>
        /* Digital Marketing Hero Section Styles */
        .sosmed-hero {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        /* Digital Marketing Pricing Section */
        .sosmed-pricing-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .sosmed-pricing-disclaimer {
            color: #555;
            font-size: 0.9rem;
            font-style: italic;
            background-color: #f9f9f9;
            padding: 12px 16px;
            border-left: 4px solid #ff6b00;
            margin: 20px 0;
            border-radius: 6px;
            line-height: 1.5;
        }

        .sosmed-pricing-description {
            color: #636363;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        /* Enhanced Pricing Card Styles */
        .hnr-house-web-pricing-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px 25px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .hnr-house-web-pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            border-color: #ff6b00;
        }

        .hnr-house-web-pricing-card.popular {
            border-color: #ff6b00;
            position: relative;
            transform: scale(1.05);
        }

        .hnr-house-web-pricing-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #ff6b00, #e55a00);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255, 107, 0, 0.3);
        }

        .hnr-house-web-pricing-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .hnr-house-web-pricing-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hnr-house-web-pricing-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .hnr-house-web-pricing-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .hnr-house-web-pricing-subtext {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .hnr-house-web-pricing-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ff6b00;
            margin-bottom: 10px;
        }

        .hnr-house-web-pricing-btn {
            background: linear-gradient(135deg, #ff6b00, #e55a00);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            width: 100%;
            text-align: center;
        }

        .hnr-house-web-pricing-btn:hover {
            background: linear-gradient(135deg, #e55a00, #cc4f00);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 0, 0.3);
        }

        .hnr-house-web-pricing-features {
            flex: 1;
        }

        .hnr-house-web-pricing-feature {
            display: flex;
            align-items: center;
            padding: 8px 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .hnr-house-web-pricing-feature span:last-child {
            margin-left: 12px;
            color: #333;
        }

        /* Enhanced Dark Mode Global Styles */
        [data-theme="dark"] {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #0f0f0f 100%);
            color: #e0e0e0;
        }

        [data-theme="dark"] body {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #0f0f0f 100%);
            font-family: 'Poppins', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Enhanced Hero Section Dark Mode */
        [data-theme="dark"] .sosmed-hero {
            background: linear-gradient(135deg, #0a0a0a 0%, #1f1f1f 25%, #2a2a2a 50%, #1f1f1f 75%, #0a0a0a 100%);
            position: relative;
            overflow: hidden;
        }

        [data-theme="dark"] .sosmed-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255, 107, 0, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 70% 80%, rgba(255, 138, 51, 0.1) 0%, transparent 50%);
            z-index: 1;
        }

        [data-theme="dark"] .sosmed-content-wrapper {
            position: relative;
            z-index: 2;
        }

        [data-theme="dark"] .sosmed-shape-left,
        [data-theme="dark"] .sosmed-shape-right {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8a33 50%, #ffb366 100%);
            opacity: 0.8;
            box-shadow: 0 0 100px rgba(255, 107, 0, 0.3);
        }

        [data-theme="dark"] .sosmed-shape-left-secondary {
            background: linear-gradient(135deg, #4d2600 0%, #663300 50%, #804000 100%);
            opacity: 0.6;
        }

        [data-theme="dark"] .sosmed-title {
            color: #ff8a33;
            text-shadow: 0 0 20px rgba(255, 138, 51, 0.5);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        [data-theme="dark"] .sosmed-subtitle {
            color: #f5f5f5;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        [data-theme="dark"] .sosmed-description {
            color: #c0c0c0;
            font-weight: 400;
            line-height: 1.8;
        }

        [data-theme="dark"] .sosmed-cta-btn {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8a33 100%);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.4);
            border: 1px solid rgba(255, 138, 51, 0.3);
        }

        [data-theme="dark"] .sosmed-cta-btn:hover {
            background: linear-gradient(135deg, #ff8a33 0%, #ffb366 100%);
            box-shadow: 0 12px 35px rgba(255, 107, 0, 0.6);
            transform: translateY(-3px);
        }

        /* Enhanced Services Section Dark Mode */
        [data-theme="dark"] .sosmed-services {
            background: linear-gradient(135deg, #111111 0%, #1e1e1e 50%, #111111 100%);
            position: relative;
        }

        [data-theme="dark"] .sosmed-services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(255, 107, 0, 0.08) 0%, transparent 60%),
                        radial-gradient(circle at 80% 70%, rgba(255, 138, 51, 0.06) 0%, transparent 60%);
            z-index: 1;
        }

        [data-theme="dark"] .sosmed-services-grid {
            position: relative;
            z-index: 2;
        }

        [data-theme="dark"] .sosmed-services-title {
            color: #f8f8f8;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.4);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        [data-theme="dark"] .sosmed-services-title .text-orange {
            color: #ff8a33;
            text-shadow: 0 0 25px rgba(255, 138, 51, 0.6);
        }

        [data-theme="dark"] .sosmed-services-description {
            color: #b8b8b8;
            font-weight: 400;
            line-height: 1.9;
        }

        [data-theme="dark"] .sosmed-service-item {
            background: rgba(42, 42, 42, 0.6);
            border-radius: 20px;
            padding: 35px 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 107, 0, 0.1);
            transition: all 0.4s ease;
        }

        [data-theme="dark"] .sosmed-service-item:hover {
            background: rgba(50, 50, 50, 0.8);
            border-color: rgba(255, 138, 51, 0.3);
            box-shadow: 0 15px 40px rgba(255, 107, 0, 0.2);
            transform: translateY(-12px);
        }

        [data-theme="dark"] .sosmed-service-title {
            color: #f5f5f5;
            font-weight: 700;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .sosmed-service-desc {
            color: #c5c5c5;
            font-weight: 400;
            line-height: 1.7;
        }

        /* Enhanced Why Different Section Dark Mode */
        [data-theme="dark"] .sosmed-why-different {
            background: linear-gradient(135deg, #0d0d0d 0%, #1a1a1a 25%, #262626 50%, #1a1a1a 75%, #0d0d0d 100%);
            position: relative;
        }

        [data-theme="dark"] .sosmed-why-different::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 40% 20%, rgba(255, 107, 0, 0.12) 0%, transparent 50%),
                        radial-gradient(circle at 60% 80%, rgba(255, 138, 51, 0.08) 0%, transparent 50%);
            z-index: 1;
        }

        [data-theme="dark"] .sosmed-features-grid {
            position: relative;
            z-index: 2;
        }

        [data-theme="dark"] .sosmed-why-different-title {
            color: #f8f8f8;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.4);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        [data-theme="dark"] .sosmed-why-different-title .text-orange {
            color: #ff8a33;
            text-shadow: 0 0 25px rgba(255, 138, 51, 0.6);
        }

        [data-theme="dark"] .sosmed-feature-card {
            background: linear-gradient(135deg, rgba(42, 42, 42, 0.9) 0%, rgba(35, 35, 35, 0.9) 100%);
            border: 1px solid rgba(255, 107, 0, 0.15);
            backdrop-filter: blur(15px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease;
        }

        [data-theme="dark"] .sosmed-feature-card:hover {
            background: linear-gradient(135deg, rgba(50, 50, 50, 0.95) 0%, rgba(45, 45, 45, 0.95) 100%);
            border-color: rgba(255, 138, 51, 0.4);
            box-shadow: 0 20px 50px rgba(255, 107, 0, 0.25);
            transform: translateY(-8px);
        }

        /* Enhanced Pricing Section Dark Mode */
        [data-theme="dark"] .sosmed-pricing-section {
            background: linear-gradient(135deg, #0f0f0f 0%, #1c1c1c 25%, #2a2a2a 50%, #1c1c1c 75%, #0f0f0f 100%);
            position: relative;
        }

        [data-theme="dark"] .sosmed-pricing-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 25% 25%, rgba(255, 107, 0, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 75% 75%, rgba(255, 138, 51, 0.08) 0%, transparent 50%);
            z-index: 1;
        }

        [data-theme="dark"] .sosmed-pricing-section .container {
            position: relative;
            z-index: 2;
        }

        [data-theme="dark"] .hnr-house-web-pricing-title {
            color: #f8f8f8;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.4);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        [data-theme="dark"] .hnr-house-web-pricing-title .hnr-house-web-title-orange {
            color: #ff8a33;
            text-shadow: 0 0 25px rgba(255, 138, 51, 0.6);
        }

        [data-theme="dark"] .hnr-house-web-pricing-subtitle {
            color: #b8b8b8;
            font-weight: 400;
            line-height: 1.8;
        }

        [data-theme="dark"] .sosmed-pricing-disclaimer {
            color: #c0c0c0;
            background: linear-gradient(135deg, rgba(42, 42, 42, 0.8) 0%, rgba(35, 35, 35, 0.8) 100%);
            border-left-color: #ff8a33;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 107, 0, 0.2);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .sosmed-pricing-description {
            color: #a8a8a8;
            font-weight: 500;
        }

        [data-theme="dark"] .hnr-house-web-pricing-card {
            background: linear-gradient(135deg, rgba(42, 42, 42, 0.95) 0%, rgba(35, 35, 35, 0.95) 100%);
            border: 1px solid rgba(255, 107, 0, 0.2);
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        }

        [data-theme="dark"] .hnr-house-web-pricing-card:hover {
            background: linear-gradient(135deg, rgba(50, 50, 50, 0.98) 0%, rgba(45, 45, 45, 0.98) 100%);
            border-color: #ff8a33;
            box-shadow: 0 25px 60px rgba(255, 107, 0, 0.3);
        }

        [data-theme="dark"] .hnr-house-web-pricing-card.popular {
            border-color: #ff8a33;
            background: linear-gradient(135deg, rgba(50, 35, 20, 0.95) 0%, rgba(45, 30, 15, 0.95) 100%);
            box-shadow: 0 20px 50px rgba(255, 107, 0, 0.4);
        }

        [data-theme="dark"] .hnr-house-web-pricing-badge {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8a33 100%);
            box-shadow: 0 6px 20px rgba(255, 107, 0, 0.5);
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .hnr-house-web-pricing-name {
            color: #f5f5f5;
            font-weight: 700;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .hnr-house-web-pricing-subtext {
            color: #c0c0c0;
            font-weight: 500;
        }

        [data-theme="dark"] .hnr-house-web-pricing-price {
            color: #ff8a33;
            text-shadow: 0 0 15px rgba(255, 138, 51, 0.4);
            font-weight: 800;
        }

        [data-theme="dark"] .hnr-house-web-pricing-btn {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8a33 100%);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.4);
            border: 1px solid rgba(255, 138, 51, 0.3);
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .hnr-house-web-pricing-btn:hover {
            background: linear-gradient(135deg, #ff8a33 0%, #ffb366 100%);
            box-shadow: 0 12px 35px rgba(255, 107, 0, 0.6);
            transform: translateY(-3px);
        }

        [data-theme="dark"] .hnr-house-web-pricing-feature span:last-child {
            color: #e5e5e5;
            font-weight: 500;
        }

        /* Enhanced Trusted Clients Section Dark Mode */
        [data-theme="dark"] .trusted-clients-section {
            background: linear-gradient(135deg, #111111 0%, #1e1e1e 50%, #111111 100%);
            position: relative;
        }

        [data-theme="dark"] .trusted-clients-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(255, 107, 0, 0.06) 0%, transparent 60%);
            z-index: 1;
        }

        [data-theme="dark"] .trusted-clients-section .container {
            position: relative;
            z-index: 2;
        }

        [data-theme="dark"] .trusted-clients-title {
            color: #f8f8f8;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.4);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        [data-theme="dark"] .trusted-clients-subtitle {
            color: #b8b8b8;
            font-weight: 400;
            line-height: 1.8;
        }

        [data-theme="dark"] .trusted-client-logo-wrap {
            background: rgba(42, 42, 42, 0.6);
            border-radius: 15px;
            padding: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 107, 0, 0.1);
            transition: all 0.3s ease;
        }

        [data-theme="dark"] .trusted-client-logo-wrap:hover {
            background: rgba(50, 50, 50, 0.8);
            border-color: rgba(255, 138, 51, 0.3);
            box-shadow: 0 10px 30px rgba(255, 107, 0, 0.2);
            transform: translateY(-5px);
        }

        [data-theme="dark"] .trusted-client-logo img {
            filter: brightness(0.9) contrast(1.1);
            transition: all 0.3s ease;
        }

        [data-theme="dark"] .trusted-client-logo-wrap:hover .trusted-client-logo img {
            filter: brightness(1.1) contrast(1.2);
        }

        /* Enhanced Check/Cross Icons Dark Mode */
        [data-theme="dark"] .hnr-pricing-check-icon {
            color: #4ade80;
            filter: brightness(1.2);
        }

        [data-theme="dark"] .hnr-pricing-cross-icon {
            color: #f87171;
            filter: brightness(1.1);
        }

        /* Enhanced Typography for Dark Mode */
        [data-theme="dark"] h1, [data-theme="dark"] h2, [data-theme="dark"] h3, [data-theme="dark"] h4, [data-theme="dark"] h5, [data-theme="dark"] h6 {
            font-family: 'Poppins', 'Inter', sans-serif;
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        [data-theme="dark"] p, [data-theme="dark"] span, [data-theme="dark"] div {
            font-family: 'Poppins', 'Inter', sans-serif;
            font-weight: 400;
        }

        /* Enhanced Contact Section Dark Mode */
        [data-theme="dark"] .hnr-contact-section {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0a0a0a 100%);
            position: relative;
        }

        [data-theme="dark"] .hnr-contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(255, 107, 0, 0.08) 0%, transparent 70%);
            z-index: 1;
        }

        [data-theme="dark"] .hnr-contact-section .container {
            position: relative;
            z-index: 2;
        }

        /* Smooth transitions for all elements */
        [data-theme="dark"] * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* Enhanced scrollbar for dark mode */
        [data-theme="dark"] ::-webkit-scrollbar {
            width: 8px;
        }

        [data-theme="dark"] ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        [data-theme="dark"] ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #ff6b00, #ff8a33);
            border-radius: 4px;
        }

        [data-theme="dark"] ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #ff8a33, #ffb366);
        }

        /* Enhanced Global Dark Mode Text Colors */
        [data-theme="dark"] .reveal-section {
            color: #e0e0e0;
        }

        [data-theme="dark"] .text-center {
            color: inherit;
        }

        /* Enhanced Animation and Transitions */
        [data-theme="dark"] .hnr-house-web-pricing-card,
        [data-theme="dark"] .sosmed-service-item,
        [data-theme="dark"] .sosmed-feature-card,
        [data-theme="dark"] .trusted-client-logo-wrap {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced Focus States for Dark Mode */
        [data-theme="dark"] .hnr-house-web-pricing-btn:focus,
        [data-theme="dark"] .sosmed-cta-btn:focus {
            outline: 2px solid rgba(255, 138, 51, 0.5);
            outline-offset: 2px;
        }

        /* Responsive Design for Pricing Section */
        @media (max-width: 1200px) {
            .sosmed-pricing-section {
                padding: 70px 0;
            }

            .hnr-house-web-pricing-card.popular {
                transform: scale(1.02);
            }
        }

        @media (max-width: 992px) {
            .sosmed-pricing-section {
                padding: 60px 0;
            }

            .hnr-house-web-pricing-card {
                margin-bottom: 30px;
                padding: 25px 20px;
            }

            .hnr-house-web-pricing-card.popular {
                transform: none;
                margin-top: 0;
            }

            .hnr-house-web-pricing-name {
                font-size: 1.2rem;
            }

            .hnr-house-web-pricing-price {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 768px) {
            .sosmed-pricing-section {
                padding: 50px 0;
            }

            .hnr-house-web-pricing-title {
                font-size: 2rem;
                margin-bottom: 15px;
            }

            .hnr-house-web-pricing-subtitle {
                font-size: 1rem;
                padding: 0 20px;
            }

            .sosmed-pricing-disclaimer {
                margin: 15px 20px;
                font-size: 0.85rem;
                padding: 10px 14px;
            }

            .hnr-house-web-pricing-card {
                margin: 0 15px 25px;
                padding: 20px 18px;
            }

            .hnr-house-web-pricing-name {
                font-size: 1.1rem;
            }

            .hnr-house-web-pricing-price {
                font-size: 1.5rem;
            }

            .hnr-house-web-pricing-btn {
                padding: 10px 25px;
                font-size: 0.95rem;
            }

            .hnr-house-web-pricing-feature {
                font-size: 0.85rem;
                padding: 6px 0;
            }
        }

        @media (max-width: 576px) {
            .sosmed-pricing-section {
                padding: 40px 0;
            }

            .hnr-house-web-pricing-title {
                font-size: 1.75rem;
            }

            .hnr-house-web-pricing-subtitle {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            .sosmed-pricing-disclaimer {
                margin: 10px 10px;
                font-size: 0.8rem;
                padding: 8px 12px;
            }

            .hnr-house-web-pricing-card {
                margin: 0 10px 20px;
                padding: 18px 15px;
                border-radius: 12px;
            }

            .hnr-house-web-pricing-icon {
                width: 50px;
                height: 50px;
                margin-bottom: 12px;
            }

            .hnr-house-web-pricing-name {
                font-size: 1rem;
                margin-bottom: 6px;
            }

            .hnr-house-web-pricing-subtext {
                font-size: 0.8rem;
                margin-bottom: 12px;
            }

            .hnr-house-web-pricing-price {
                font-size: 1.3rem;
                margin-bottom: 8px;
            }

            .sosmed-pricing-description {
                font-size: 11px;
                margin-bottom: 15px;
            }

            .hnr-house-web-pricing-btn {
                padding: 8px 20px;
                font-size: 0.9rem;
                margin-bottom: 20px;
            }

            .hnr-house-web-pricing-feature {
                font-size: 0.8rem;
                padding: 5px 0;
            }

            .hnr-house-web-pricing-badge {
                font-size: 10px;
                padding: 6px 15px;
                top: -10px;
            }
        }

        @media (max-width: 480px) {
            .hnr-house-web-pricing-title {
                font-size: 1.5rem;
            }

            .hnr-house-web-pricing-subtitle {
                font-size: 0.85rem;
            }

            .hnr-house-web-pricing-card {
                margin: 0 5px 15px;
                padding: 15px 12px;
            }

            .hnr-house-web-pricing-name {
                font-size: 0.95rem;
            }

            .hnr-house-web-pricing-price {
                font-size: 1.2rem;
            }

            .hnr-house-web-pricing-feature {
                font-size: 0.75rem;
            }
        }

        /* Orange Decorative Shapes - Updated to Circles */
        .sosmed-shape-left {
            position: absolute;
            top: -40%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: #FF6B00;
            border-radius: 50%;
        }

        .sosmed-shape-left-secondary {
            position: absolute;
            top: -20%;
            left: 5%;
            width: 400px;
            height: 400px;
            background: #FFE5CC;
            border-radius: 50%;
        }

        .sosmed-shape-right {
            position: absolute;
            bottom: -40%;
            right: -15%;
            width: 700px;
            height: 700px;
            background: #FF6B00;
            border-radius: 50%;
        }

        /* Content Container */
        .sosmed-content-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        /* Hero Title */
        .sosmed-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #FF6B00;
            margin-bottom: 0.5rem;
            line-height: 1.1;
        }

        .sosmed-subtitle {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        /* Hero Description */
        .sosmed-description {
            font-size: 1.1rem;
            color: #555555;
            line-height: 1.7;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        /* CTA Button */
        .sosmed-cta-btn {
            background-color: #FF6B00;
            color: white;
            padding: 0.875rem 2.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .sosmed-cta-btn:hover {
            background-color: #E55A00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
        }

        /* Illustration Container */
        .sosmed-illustration {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .sosmed-illustration img {
            width: 100%;
            max-width: 600px;
            height: auto;
            object-fit: contain;
        }



        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-content-wrapper {
                padding: 0 2rem;
            }
        }

        @media (max-width: 992px) {
            .sosmed-title {
                font-size: 2.5rem;
            }

            .sosmed-subtitle {
                font-size: 2.2rem;
            }

            .sosmed-illustration img {
                max-width: 500px;
            }

            .sosmed-shape-left {
                width: 500px;
                height: 500px;
                top: -30%;
                left: -15%;
            }

            .sosmed-shape-left-secondary {
                width: 350px;
                height: 350px;
            }

            .sosmed-shape-right {
                width: 600px;
                height: 600px;
                bottom: -35%;
                right: -20%;
            }
        }

        @media (max-width: 768px) {
            .sosmed-hero {
                padding: 60px 0;
                min-height: auto;
            }

            .sosmed-title {
                font-size: 2rem;
                text-align: center;
            }

            .sosmed-subtitle {
                font-size: 1.8rem;
                text-align: center;
            }

            .sosmed-description {
                font-size: 1rem;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }

            .sosmed-cta-btn {
                display: block;
                width: fit-content;
                margin: 0 auto;
            }

            .sosmed-illustration {
                margin-bottom: 2rem;
            }

            .sosmed-shape-left {
                width: 200px;
                height: 200px;
                top: -100px;
                left: -100px;
            }

            .sosmed-shape-left-secondary {
                width: 150px;
                height: 150px;
            }

            .sosmed-shape-right {
                width: 250px;
                height: 250px;
                bottom: -125px;
                right: -125px;
            }
        }

        @media (max-width: 576px) {
            .sosmed-title {
                font-size: 1.75rem;
            }

            .sosmed-subtitle {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .sosmed-description {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
            }

            .sosmed-cta-btn {
                font-size: 1rem;
                padding: 0.75rem 2rem;
            }

            .sosmed-illustration img {
                max-width: 300px;
            }

            .sosmed-shape-left {
                width: 150px;
                height: 150px;
                top: -75px;
                left: -75px;
            }

            .sosmed-shape-right {
                width: 200px;
                height: 200px;
                bottom: -100px;
                right: -100px;
            }
        }

        /* Services Section Styles */
        .sosmed-services {
            padding: 80px 0;
            background-color: #FFFFFF;
            position: relative;
        }

        /* Services Header */
        .sosmed-services-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .sosmed-services-title {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .sosmed-services-title .text-orange {
            color: #FF6B00;
        }

        .sosmed-services-description {
            font-size: 1.1rem;
            color: #666666;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Services Grid */
        .sosmed-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Service Item */
        .sosmed-service-item {
            text-align: center;
            padding: 30px 20px;
            transition: transform 0.3s ease;
        }

        .sosmed-service-item:hover {
            transform: translateY(-10px);
        }

        .sosmed-service-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-service-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .sosmed-service-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 15px;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-service-desc {
            font-size: 1rem;
            color: #666666;
            line-height: 1.6;
            max-width: 300px;
            margin: 0 auto;
        }



        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-services-grid {
                padding: 0 20px;
            }
        }

        @media (max-width: 992px) {
            .sosmed-services-title {
                font-size: 2.5rem;
            }

            .sosmed-services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .sosmed-service-icon {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 768px) {
            .sosmed-services {
                padding: 60px 0;
            }

            .sosmed-services-title {
                font-size: 2rem;
            }

            .sosmed-services-description {
                font-size: 1rem;
                padding: 0 20px;
            }

            .sosmed-services-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 0 30px;
            }

            .sosmed-service-title {
                font-size: 1.2rem;
                min-height: auto;
            }
        }

        @media (max-width: 576px) {
            .sosmed-services-title {
                font-size: 1.75rem;
            }

            .sosmed-services-description {
                font-size: 0.95rem;
                line-height: 1.7;
            }

            .sosmed-service-icon {
                width: 80px;
                height: 80px;
                margin-bottom: 20px;
            }

            .sosmed-service-title {
                font-size: 1.1rem;
                margin-bottom: 10px;
            }

            .sosmed-service-desc {
                font-size: 0.95rem;
            }
        }

        .sosmed-why-different {
            padding: 100px 0;
            background-color: #F8F9FA;
            position: relative;
        }

        /* Section Header */
        .sosmed-why-different-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .sosmed-why-different-title {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            line-height: 1.3;
        }

        .sosmed-why-different-title .text-orange {
            color: #FF6B00;
        }

        /* Features Grid - Cleaned up for flexbox layout */
        .sosmed-features-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .sosmed-features-row {
            display: flex;
            justify-content: center;
            gap: 32px;
            margin-bottom: 32px;
        }

        .sosmed-features-row:last-child {
            margin-bottom: 0;
        }

        /* Styling for Feature Cards */
        .sosmed-feature-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sosmed-feature-card:hover {
            transform: translateY(-10px);
            /* Lift effect */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            /* Stronger shadow */
        }

        /* Image and Text styling */
        .sosmed-feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-feature-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .sosmed-feature-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .sosmed-feature-desc {
            font-size: 1rem;
            color: #666666;
            line-height: 1.6;
        }



        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-features-grid {
                padding: 0 20px;
            }

            .sosmed-features-row {
                gap: 25px;
            }
        }

        @media (max-width: 992px) {
            .sosmed-why-different-title {
                font-size: 2.5rem;
            }

            .sosmed-features-row {
                flex-wrap: wrap;
                gap: 20px;
            }

            .sosmed-feature-card {
                flex: 0 1 calc(50% - 10px);
                max-width: 400px;
            }
        }

        @media (max-width: 768px) {
            .sosmed-why-different {
                padding: 70px 0;
            }

            .sosmed-why-different-title {
                font-size: 2rem;
                padding: 0 20px;
            }

            .sosmed-why-different-header {
                margin-bottom: 50px;
            }

            .sosmed-features-row {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .sosmed-feature-card {
                flex: none;
                width: 100%;
                max-width: 400px;
                padding: 30px 25px;
            }

            .sosmed-feature-title {
                font-size: 1.15rem;
            }
        }

        @media (max-width: 576px) {
            .sosmed-why-different {
                padding: 60px 0;
            }

            .sosmed-why-different-title {
                font-size: 1.75rem;
            }

            .sosmed-feature-icon {
                width: 70px;
                height: 70px;
                margin-bottom: 20px;
            }

            .sosmed-feature-title {
                font-size: 1.1rem;
                margin-bottom: 12px;
            }

            .sosmed-feature-desc {
                font-size: 0.95rem;
            }

            .sosmed-feature-card {
                padding: 25px 20px;
                border-radius: 15px;
            }
        }
    </style>

    <section class="sosmed-hero">
        <!-- Orange Decorative Circles -->
        <div class="sosmed-shape-left"></div>
        <div class="sosmed-shape-left-secondary"></div>
        <div class="sosmed-shape-right"></div>

        <div class="container-fluid sosmed-content-wrapper">
            <div class="row align-items-center">
                <!-- Left Illustration -->
                <div class="col-lg-5 col-md-6 col-12 order-2 order-lg-1">
                    <div class="sosmed-illustration">
                        <img src="{{ asset('assets/images/sosmed/hero.svg') }}" alt="Digital Marketing Illustration">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-7 col-md-6 col-12 order-1 order-lg-2">
                    <h1 class="sosmed-title">Digital Marketing</h1>
                    <h2 class="sosmed-subtitle">Terpadu untuk Bisnis Anda</h2>
                    <p class="sosmed-description">
                        Dari manajemen sosial media hingga kampanye iklan yang efektif, Hanara hadir membantu bisnis Anda
                        tumbuh secara digital—dengan konten profesional, strategi cerdas, dan dukungan talent kreatif.
                    </p>
                    <a href="#" class="sosmed-cta-btn">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sosmed-services">
        <div class="container">
            <!-- Section Header -->
            <div class="sosmed-services-header">
                <h2 class="sosmed-services-title">
                    <span class="text-orange">Lebih dari</span> Sekedar <br>
                    Upload Konten
                </h2>
                <p class="sosmed-services-description">
                    Hanara bukan hanya agensi sosial media biasa. Kami hadir sebagai partner Anda dalam mengelola<br>
                    brand di era digital. Mulai dari konten visual profesional, iklan berbayar, laporan performa rutin,<br>
                    hingga produksi video dan konten TikTok, semua dirancang untuk hasil yang terukur.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="sosmed-services-grid">
                <!-- Row 1 -->
                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/manajemen sosmed.svg') }}" alt="Social Media Management">
                    </div>
                    <h3 class="sosmed-service-title">Manajemen Facebook, Instagram dan LinkedIn</h3>
                    <p class="sosmed-service-desc">Kelola dan optimalkan kehadiran brand Anda di platform media sosial
                        terkemuka
                    </p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/copywriting.svg') }}" alt="Copywriting & Design">
                    </div>
                    <h3 class="sosmed-service-title">Copywriting & Desain Visual yang Menarik</h3>
                    <p class="sosmed-service-desc">Ciptakan pesan dan visual yang memikat audiens Anda</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/iklan.svg') }}" alt="Paid Advertising">
                    </div>
                    <h3 class="sosmed-service-title">Iklan Berbayar (Facebook Ads & Google Ads)</h3>
                    <p class="sosmed-service-desc">Kampanye iklan yang efektif untuk jangkauan dan konversi maksimal</p>
                </div>

                <!-- Row 2 -->
                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/optimasi.svg') }}" alt="Google My Business">
                    </div>
                    <h3 class="sosmed-service-title">Optimisasi Google My Business</h3>
                    <p class="sosmed-service-desc">Pastikan bisnis Anda mudah ditemukan di pencarian lokal Google</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/produksi.svg') }}" alt="Video Production">
                    </div>
                    <h3 class="sosmed-service-title">Produksi Video dan Konten Tiktok/Reels</h3>
                    <p class="sosmed-service-desc">Ciptakan konten video pendek yang menarik dan viral.</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/talent.svg') }}" alt="Content Creator">
                    </div>
                    <h3 class="sosmed-service-title">Talent Content Creator Hanara</h3>
                    <p class="sosmed-service-desc">Dapatkan dukungan dari talent profesional untuk kebutuhan konten visual
                        Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sosmed-why-different">
        <div class="container">
            <!-- Section Header -->
            <div class="sosmed-why-different-header">
                <h2 class="sosmed-why-different-title">
                    <span class="text-orange">Kenapa</span> Digital Marketing dari<br>
                    Hanara <span class="text-orange">Berbeda?</span>
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="sosmed-features-grid">
                <!-- Row 1 -->
                <div class="sosmed-features-row sosmed-features-row-3"
                    style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px;">
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/tim desain.svg') }}" alt="In-House Team">
                        </div>
                        <h3 class="sosmed-feature-title">Didukung Tim Desain &<br>Copywriter In-House</h3>
                        <p class="sosmed-feature-desc">Kualitas terjaga dengan tim profesional internal.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/laporan.svg') }}" alt="Reports">
                        </div>
                        <h3 class="sosmed-feature-title">Laporan Rutin &<br>Analisa Performa</h3>
                        <p class="sosmed-feature-desc">Lihat hasil nyata dan progres kampanye Anda.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/talent 2.svg') }}" alt="Internal Talent">
                        </div>
                        <h3 class="sosmed-feature-title">Talent & Produksi Konten<br>Internal (Bukan Freelance)</h3>
                        <p class="sosmed-feature-desc">Kami garansi konsistensi dan kualitas tinggi.</p>
                    </div>
                </div>
                <div class="sosmed-features-row sosmed-features-row-2"
                    style="display: flex; justify-content: center; gap: 32px;">
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/ads.svg') }}" alt="Transparent">
                        </div>
                        <h3 class="sosmed-feature-title">Kontrol Iklan &<br>Anggaran Iklan Transparan</h3>
                        <p class="sosmed-feature-desc">Anda memiliki kendali penuh atas investasi iklan Anda.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/umkm.svg') }}" alt="Suitable">
                        </div>
                        <h3 class="sosmed-feature-title">Cocok untuk UMKM, Startup,<br>hingga Korporasi</h3>
                        <p class="sosmed-feature-desc">Solusi digital marketing yang skalabel untuk semua ukuran bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trusted-clients-section">
        <div class="container reveal-section">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="trusted-clients-heading">
                        <span class="trusted-clients-tag">• Our Client •</span>
                        <h2 class="trusted-clients-title">Dipercaya oleh Berbagai Klien dari Beragam Industri</h2>
                        <p class="trusted-clients-subtitle">
                            Beberapa perusahaan dan organisasi ternama di Indonesia telah mempercayakan solusi IT mereka
                            kepada Hanara. Kami terus berkomitmen memberikan layanan terbaik sesuai kebutuhan klien.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row trusted-clients-logos">
                <!-- Row 1 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/cde-coal.png') }}" alt="CDE Coal">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/ces-coal.png') }}" alt="CES Coal">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mpp.png') }}" alt="MPP">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/yacoonn.png') }}" alt="Yacoon">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/chm.png') }}" alt="CHM">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/spn-logo.png') }}" alt="Sindo Prima Niaga">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/ef bengkulu.png') }}" alt="Branch Kota Bengkulu">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mitra plus.png') }}" alt="Mitra Plus">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/msk.png') }}" alt="MSK">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/tek.png') }}" alt="TEK">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/sac.png') }}" alt="Asia Capital">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mavix.png') }}" alt="Mavix">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Digital Marketing Packages Section -->
    <section class="sosmed-pricing-section">
        <div class="container">
            <!-- Pricing Header -->
            <div class="row mt-5 mb-1 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-house-web-pricing-title">
                        <span class="hnr-house-web-title-orange">Paket </span> Digital Marketing
                    </h2>
                    <p class="hnr-house-web-pricing-subtitle">
                        Solusi Pemasaran Digital Terbaik untuk Bisnis Anda<br>
                        Tingkatkan visibilitas online dan jangkauan customer dengan strategi digital marketing yang tepat
                        sasaran.
                    </p>
                </div>
            </div>

            <div class="row mb-5 reveal-section">
                <div class="sosmed-pricing-disclaimer">
                    Harga belum termasuk PPN. Setiap strategi digital marketing disesuaikan dengan target market dan
                    kebutuhan bisnis Anda.
                </div>

                <!-- Package 1: Digital Marketing Starter -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud2.png') }}"
                                        alt="Digital Marketing Starter">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Starter</h3>
                                <p class="hnr-house-web-pricing-subtext">1 Platform (Instagram/Facebook)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 4.950.000</div>
                            <p class="sosmed-pricing-description">
                                Cocok untuk bisnis yang baru memulai
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>8 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Ads</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Talents</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Video</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Laporan Bulanan (Basic)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WhatsApp</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 2: Digital Marketing Growth -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud3.png') }}"
                                        alt="Digital Marketing Growth">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Growth</h3>
                                <p class="hnr-house-web-pricing-subtext">2 Platform (IG/Facebook + LinkedIn)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 8.950.000</div>
                            <p class="sosmed-pricing-description">
                                Untuk bisnis yang ingin berkembang
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>12 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Facebook Ads (500K Ads Budget)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Setup & Optimasi Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Talents</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Video</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Laporan Bulanan (Detail + Insight)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WA & Email</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 3: Digital Marketing Pro (Best Seller) -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card popular">
                        <div class="hnr-house-web-pricing-badge">Paling Populer</div>
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud4.png') }}"
                                        alt="Digital Marketing Pro">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Pro (Best Seller)</h3>
                                <p class="hnr-house-web-pricing-subtext">3 Platform (IG/FB + LinkedIn + TikTok)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 14.950.000</div>
                            <p class="sosmed-pricing-description">
                                Solusi lengkap untuk ekspansi bisnis
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>16 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual + SEO Caption & Hashtag</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Facebook Ads (1JT Ads Budget)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Setup + Full Optimasi & Posting Mingguan GMB</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Tersedia Talent Handal</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Video Reels + TikTok Short Format</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Full Report + Strategi Bulan Depan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WA, Email & Virtual Meet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hnr-contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection
