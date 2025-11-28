<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android Phones Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar">
        <ul class="nav-links">
            <li class="nav-item"><a href="index.html"><img src="icons/home.png" alt="Home"></a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
            <li><a href="accessories.html">Accessories</a></li>
            <li><a href="support.html">Support</a></li>
            <li class="nav-item"><a href="#"><img src="icons/search.png" alt="Search"></a></li>
            <li class="nav-item"><a href="#"><img src="icons/cart.png" alt="Cart"></a>
                <ul class="dropdown">
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-section-header">Select the specifications of your choice:</div>
    </div>

    <!-- Specifications Text -->
    <div class="specifications_text_area">
        <h2 class="specification-header">Select your specifications:</h2>
    </div>
    <div class="specifications_text_area">
        <p>Choose the model, storage size, unlock status and color of your choice.</p>
    </div>

    <!-- Specifications Selection Area -->

    <!-- Android Brand Selection Section -->
    <div class="specifications_selction_area">
        <form>
            <div class="form-group">
                <label for="android_brand_selection">Select your desired android brand:</label>
                <select id="android_brand_selection">
                    <option value="">--Select an android brand--</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Google">Google</option>
                    <option value="OnePlus">OnePlus</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Realme">Realme</option>
                    <option value="Redmi">Redmi</option>
                    <option value="Nothing">Nothing</option>
                    <option value="Motorola">Motorola</option>
                </select>
            </div>
        </form>
    </div>

    <!-- android model selection section-->
    <div class="android_model_selection_area">
        <form>
            <div class="form-group">
                <label for="android_models">Select a Model:</label>
                <select id="android_models" title="Choose your android model">
                    <option value="">--Select a model--</option>
                </select>

                <!-- Storage Selection -->
                <div class="form-group storage-group hidden">
                    <label for="storage_size">Choose your Storage Size:</label>
                    <select id="storage_size" disabled>
                        <option value="">--Choose your Storage Size--</option>
                    </select>
                </div>

                <!-- Color Selection -->
                <div class="form-group color-group hidden">
                    <label for="color">Select Color:</label>
                    <select id="color" disabled>
                        <option value="">--Select your desired Color--</option>
                    </select>
                </div>

                <!-- Unlock Status Selection -->
                <div class="form-group">
                    <label for="unlock_status">Select Unlock Status:</label>
                    <select id="unlock_status">
                        <option value="">--Select Unlocked Status--</option>
                        <option value="Factory_Unlocked">Factory Unlocked</option>
                        <option value="Tempoary_Locked">Temporary Unlocked</option>
                        <option value="Gevey_Locked">Gevey Unlocked</option>
                    </select>
                </div>


                <!-- RAM Selection -->
                <div class="form-group ram-group hidden">
                    <label for="ram_size">Select RAM:</label>
                    <select id="ram_size" disabled>
                        <option value="">--Choose RAM--</option>
                    </select>
                </div>

            </div>

            <!-- Live Preview -->
            <div id="preview" class="preview">
                <h3>Preview:</h3>
                <p id="previewBrand">→ Brand:</p>
                <p id="previewModel">→ Model:</p>
                <p id="previewStorage">→ Storage:</p>
                <p id="previewColor">→ Color:</p>
                <p id="previewUnlockStatus">→ Unlock Status:</p>
                <p id="previewRAM">→ RAM:</p>

                <div id="previewFeatures" class="preview-features">
                    <h4>Device Features:</h4>
                    <ul id="featuresList"></ul>
                </div>

                <img id="previewImage" src="" alt="Phone Preview" class="preview-image">
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <h2 class="footer-header">Your Trusted Tech Marketplace</h2>
        <div class="footer-content">
            <div class="footer-left">
                <p class="footer-header">About us</p>
                <p><a href="#">Terms & Conditions</a></p>
            </div>
            <div class="footer-center">
                <p class="footer-header">Contact:</p>
                <p>Phone : +233 242 100 866<br>Email : samuel.oddoye@icloud.com</p>
            </div>
            <div class="footer-right">
                <p class="footer-header">Follow Us:</p>
                <p><a href="./pictures/contact_me_whatsapp">Whatsapp</a> | <a href="https://x.com/oddoye_samuel">Twitter</a> |
                    <a href="https://www.instagram.com/nii.odoi.oddoye/">Instagram</a> |
                    <a href="https://snapchat.com/t/Coo4vIsE">Snapchat</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
        /* =========================================================
       DEVICE DATABASE — UNIVERSAL & REUSABLE
       Includes RAM, Storage, Colors & Full Feature Set
    ========================================================== */

        const deviceData = {
            /* Section of code holding samsunng Device data */
            Samsung: {
                Samsung_S24_Ultra: {
                    name: "Samsung Galaxy S24 Ultra",
                    ram: ["12GB", "16GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: [
                        "Titanium Gray", "Titanium Black", "Titanium Violet",
                        "Titanium Yellow", "Titanium Blue", "Titanium Green", "Titanium Orange"
                    ],
                    unlockStatus: ["Factory Unlocked", "Tempoary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/android_pictures",
                    features: {
                        display: "6.8” Dynamic AMOLED 2X",
                        resolution: "3120 × 1440",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 3 for Galaxy",
                        rearCamera: "200MP Wide (f/1.7) + 50MP Periscope Telephoto (5x, f/3.4) + 12MP Ultra-Wide (f/2.2) + 10MP Telephoto (3x, f/2.4) + 10MP",
                        frontCamera: "12MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "45W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 14 (One UI 6.1) ",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Titanium Frame + Gorilla Glass Armor",
                        special: [
                            "S-Pen Support",
                            "AI Camera Engine",
                            "Galaxy AI Features (Circle to Search, Live Translate) ",
                            "IP68 Water Resistance",
                            "100x Space Zoom",
                            "Ultra Telephoto Zoom",
                            "IP68 Water & Dust Resistance"
                        ]
                    }
                },

                Samsung_S24_Plus: {
                    name: "Samsung Galaxy S24+",
                    ram: ["8GB", "12GB"],
                    storages: ["256GB", "512GB"],
                    colors: ["Onyx Black", "Marble Gray", "Cobalt Violet", "Amber Yellow"],
                    imageFolder: "images/android_pictures",
                    features: {
                        display: "6.7” Dynamic AMOLED 2X",
                        chipset: "Snapdragon 8 Gen 3",
                        battery: "4900mAh",
                        special: ["AI Nightography", "IP68 Water Resistance"]
                    }
                },

                Samsung_S24: {
                    name: "Samsung Galaxy S24",
                    ram: ["8GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["Onyx Black", "Marble Gray", "Cobalt Violet", "Amber Yellow", "Jade Green", "Sapphire Blue", "Sandstone Orange"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/s24",
                    features: {
                        display: "6.2” Dynamic AMOLED 2X",
                        resolution: "2340 × 1080",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Exynos 2400 / Snapdragon 8 Gen 3 for Galaxy (Region Dependent)",
                        rearCamera: "50MP Wide (f/1.8) + 10MP Telephoto (3x, f/2.4) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "12MP (f/2.2)",
                        battery: "4000mAh",
                        charging: "25W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 14 (One UI 6.1)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame + Gorilla Glass Victus 2",
                        special: ["Galaxy AI Features (Circle to Search, Live Translate)", "Compact Flagship Design", "IP68 Water Resistance"]
                    }
                },

                Samsung_S23_Ultra: {
                    name: "Samsung Galaxy S23 Ultra",
                    ram: ["8GB", "12GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Phantom Black", "Green", "Cream", "Lavender", "Lime", "Graphite", "Sky Blue", "Red"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/s23_ultra",
                    features: {
                        display: "6.8” Dynamic AMOLED 2X",
                        resolution: "3088 × 1440",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 2 for Galaxy",
                        rearCamera: "200MP Wide (f/1.7) + 10MP Periscope Telephoto (10x, f/4.9) + 10MP Telephoto (3x, f/2.4) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "12MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "45W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame + Gorilla Glass Victus 2",
                        special: [
                            "S-Pen Support",
                            "200MP Adaptive Pixel Sensor",
                            "Enhanced Nightography",
                            "100x Space Zoom",
                            "IP68 Water Resistance"
                        ]
                    }
                },

                Samsung_S23_Plus: {
                    name: "Samsung Galaxy S23+",
                    ram: ["8GB"],
                    storages: ["256GB", "512GB"],
                    colors: ["Phantom Black", "Green", "Cream", "Lavender", "Graphite", "Lime"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/s23_plus",
                    features: {
                        display: "6.6” Dynamic AMOLED 2X",
                        resolution: "2340 × 1080",
                        refreshRate: "48–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 2 for Galaxy",
                        rearCamera: "50MP Wide (f/1.8) + 10MP Telephoto (3x, f/2.4) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "12MP (f/2.2)",
                        battery: "4700mAh",
                        charging: "45W Wired, 4.5W Reverse Wireless, 10W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame + Gorilla Glass Victus 2",
                        special: [
                            "Larger battery for extended use",
                            "Enhanced Nightography",
                            "IP68 Water Resistance"
                        ]
                    }
                },

                Samsung_S23: {
                    name: "Samsung Galaxy S23",
                    ram: ["8GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["Phantom Black", "Green", "Cream", "Lavender", "Graphite", "Lime"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/s23",
                    features: {
                        display: "6.1” Dynamic AMOLED 2X",
                        resolution: "2340 × 1080",
                        refreshRate: "48–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 2 for Galaxy",
                        rearCamera: "50MP Wide (f/1.8) + 10MP Telephoto (3x, f/2.4) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "12MP (f/2.2)",
                        battery: "3900mAh",
                        charging: "25W Wired, 4.5W Reverse Wireless, 10W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame + Gorilla Glass Victus 2",
                        special: [
                            "Compact Flagship Design",
                            "Enhanced Nightography",
                            "IP68 Water Resistance"
                        ]
                    }
                },

                Samsung_Z_Fold_5: {
                    name: "Samsung Galaxy Z Fold 5",
                    ram: ["12GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Icy Blue", "Phantom Black", "Cream", "Gray", "Blue"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/z_fold_5",
                    features: {
                        display: "Main: 7.6” Dynamic AMOLED 2X / Cover: 6.2” Dynamic AMOLED 2X",
                        resolution: "Main: 2176 x 1812 / Cover: 2316 x 904",
                        refreshRate: "1–120Hz Adaptive (Both)",
                        chipset: "Snapdragon 8 Gen 2 for Galaxy",
                        rearCamera: "50MP Wide (f/1.8) + 12MP Ultra-Wide (f/2.2) + 10MP Telephoto (3x, f/2.4)",
                        frontCamera: "Cover: 10MP (f/2.2) / Under Display: 4MP (f/1.8)",
                        battery: "4400mAh",
                        charging: "25W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame, Gorilla Glass Victus 2 (Cover)",
                        special: [
                            "Foldable Form Factor",
                            "S-Pen Support (Fold Edition)",
                            "IPX8 Water Resistance",
                            "Flex Mode",
                            "Taskbar & Multi-Active Window"
                        ]
                    }
                },

                Samsung_Z_Fold_4: {
                    name: "Samsung Galaxy Z Fold 4",
                    ram: ["12GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Graygreen", "Phantom Black", "Beige", "Burgundy"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/z_fold_4",
                    features: {
                        display: "Main: 7.6” Dynamic AMOLED 2X / Cover: 6.2” Dynamic AMOLED 2X",
                        resolution: "Main: 2176 x 1812 / Cover: 2316 x 904",
                        refreshRate: "1–120Hz Adaptive (Both)",
                        chipset: "Snapdragon 8+ Gen 1",
                        rearCamera: "50MP Wide (f/1.8) + 12MP Ultra-Wide (f/2.2) + 10MP Telephoto (3x, f/2.4)",
                        frontCamera: "Cover: 10MP (f/2.2) / Under Display: 4MP (f/1.8)",
                        battery: "4400mAh",
                        charging: "25W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 12L (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame",
                        special: [
                            "Foldable Form Factor",
                            "S-Pen Support",
                            "IPX8 Water Resistance",
                            "Under-Display Camera",
                            "Flex Mode"
                        ]
                    }
                },

                Samsung_Z_Flip_5: {
                    name: "Samsung Galaxy Z Flip 5",
                    ram: ["8GB"],
                    storages: ["256GB", "512GB"],
                    colors: ["Mint", "Graphite", "Cream", "Lavender", "Gray", "Blue", "Green", "Yellow"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/z_flip_5",
                    features: {
                        display: "Main: 6.7” Dynamic AMOLED 2X / Cover: 3.4” Super AMOLED",
                        resolution: "Main: 2640 x 1080",
                        refreshRate: "1–120Hz Adaptive (Main)",
                        chipset: "Snapdragon 8 Gen 2 for Galaxy",
                        rearCamera: "12MP Wide (f/1.8) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "10MP (f/2.2)",
                        battery: "3700mAh",
                        charging: "25W Wired, 4.5W Reverse Wireless, 15W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM) / eSIM",
                        build: "Armor Aluminum Frame",
                        special: [
                            "Clamshell Foldable Design",
                            "Large Flex Window Cover Screen",
                            "Flex Mode",
                            "IPX8 Water Resistance",
                            "Hands-Free Video & Photos"
                        ]
                    }
                },

                Samsung_A54_5G: {
                    name: "Samsung Galaxy A54 5G",
                    ram: ["6GB", "8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Awesome Black", "Awesome White", "Awesome Violet", "Awesome Lime Green"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/a54_5g",
                    features: {
                        display: "6.4” Super AMOLED",
                        resolution: "2340 x 1080",
                        refreshRate: "120Hz",
                        chipset: "Exynos 1380",
                        rearCamera: "50MP Main (f/1.8) + 12MP Ultra-Wide (f/2.2) + 5MP Macro (f/2.4)",
                        frontCamera: "32MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "25W Wired",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Gorilla Glass 5 Front",
                        special: [
                            "IP67 Water & Dust Resistance",
                            "120Hz Smooth Display",
                            "Long-lasting Battery"
                        ]
                    }
                },

                Samsung_A34_5G: {
                    name: "Samsung Galaxy A34 5G",
                    ram: ["6GB", "8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Awesome Black", "Awesome White", "Awesome Violet", "Awesome Lime Green"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked", "Gevey Unlocked"],
                    imageFolder: "images/samsung/a34_5g",
                    features: {
                        display: "6.6” Super AMOLED",
                        resolution: "2340 x 1080",
                        refreshRate: "120Hz",
                        chipset: "MediaTek Dimensity 1080",
                        rearCamera: "48MP Main (f/1.8) + 8MP Ultra-Wide (f/2.2) + 5MP Macro (f/2.4)",
                        frontCamera: "13MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "25W Wired",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Gorilla Glass 5 Front",
                        special: [
                            "IP67 Water & Dust Resistance",
                            "120Hz Smooth Display",
                            "Value for Money"
                        ]
                    }
                }
            },

            /* Section of code holdeing Google Device data */
            Google: {
                Google_Pixel_8_Pro: {
                    name: "Google Pixel 8 Pro",
                    ram: ["12GB"],
                    storages: ["128GB", "256GB", "512GB", "1TB"],
                    colors: ["Obsidian", "Porcelain", "Bay"],
                    imageFolder: "images/android_pictures",
                    features: {
                        display: "6.7” LTPO OLED",
                        chipset: "Google Tensor G3",
                        battery: "5050mAh",
                        os: "Android 14",
                        special: ["Magic Editor AI", "7 Years Updates", "Face Unlock"]
                    }
                },

                Google_Pixel_8: {
                    name: "Google Pixel 8",
                    ram: ["8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Obsidian", "Hazel", "Rose"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/google/pixel_8",
                    features: {
                        display: "6.2” Actua OLED",
                        resolution: "2400 x 1080",
                        refreshRate: "60–120Hz Adaptive",
                        chipset: "Google Tensor G3",
                        rearCamera: "50MP Wide (f/1.7) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "10.5MP (f/2.2)",
                        battery: "4575mAh",
                        charging: "27W Wired, 18W Wireless",
                        os: "Android 14",
                        network: "5G / Dual SIM (Nano-SIM + eSIM)",
                        build: "Polished Aluminum Frame + Gorilla Glass Victus",
                        special: [
                            "Best Take & Audio Magic Eraser", "Compact, Premium Design", "IP68 Water Resistance", "7 Years of OS Updates"
                        ]
                    }
                },

                Google_Pixel_7_Pro: {
                    name: "Google Pixel 7 Pro",
                    ram: ["12GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["Obsidian", "Hazel", "Snow"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/google/pixel_7_pro",
                    features: {
                        display: "6.7” LTPO OLED",
                        resolution: "3120 x 1440",
                        refreshRate: "10–120Hz Adaptive",
                        chipset: "Google Tensor G2",
                        rearCamera: "50MP Wide (f/1.9) + 12MP Ultra-Wide (f/2.2) + 48MP Telephoto (5x, f/3.5)",
                        frontCamera: "10.8MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "23W Wired, 23W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM + eSIM)",
                        build: "Aluminum Frame + Gorilla Glass Victus",
                        special: ["Super Res Zoom up to 30x", "Macro Focus", "4K 60fps Video on all cameras", "Face Unblur & Magic Eraser"]
                    }
                },

                Google_Pixel_7: {
                    name: "Google Pixel 7",
                    ram: ["8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Obsidian", "Lemongrass", "Snow"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/google/pixel_7",
                    features: {
                        display: "6.3” OLED",
                        resolution: "2400 x 1080",
                        refreshRate: "90Hz",
                        chipset: "Google Tensor G2",
                        rearCamera: "50MP Wide (f/1.9) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "10.8MP (f/2.2)",
                        battery: "4355mAh",
                        charging: "20W Wired, 20W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM + eSIM)",
                        build: "Aluminum Frame + Gorilla Glass Victus",
                        special: ["Night Sight & Real Tone", "Magic Eraser & Photo Unblur", "IP68 Water Resistance"]
                    }
                },

                Google_Pixel_7a: {
                    name: "Google Pixel 7a",
                    ram: ["8GB"],
                    storages: ["128GB"],
                    colors: ["Charcoal", "Sea", "Snow", "Coral"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/google/pixel_7a",
                    features: {
                        display: "6.1” OLED",
                        resolution: "2400 x 1080",
                        refreshRate: "90Hz",
                        chipset: "Google Tensor G2",
                        rearCamera: "64MP Wide (f/1.9) + 13MP Ultra-Wide (f/2.2)",
                        frontCamera: "13MP (f/2.2)",
                        battery: "4385mAh",
                        charging: "18W Wired, 7.5W Wireless",
                        os: "Android 13 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM + eSIM)",
                        build: "Polycarbonate Unibody",
                        special: ["Affordable Pixel Experience", "Wireless Charging", "IP67 Water Resistance"]
                    }
                },

                Google_Pixel_6a: {
                    name: "Google Pixel 6a",
                    ram: ["6GB"],
                    storages: ["128GB"],
                    colors: ["Charcoal", "Chalk", "Sage"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/google/pixel_6a",
                    features: {
                        display: "6.1” OLED",
                        resolution: "2400 x 1080",
                        refreshRate: "60Hz",
                        chipset: "Google Tensor G1",
                        rearCamera: "12.2MP Wide (f/1.7) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "8MP (f/2.0)",
                        battery: "4410mAh",
                        charging: "18W Wired",
                        os: "Android 12 (Upgradable to Android 14)",
                        network: "5G / Dual SIM (Nano-SIM + eSIM)",
                        build: "Polycarbonate Unibody",
                        special: ["Class-leading Camera for price", "Pure Android Experience", "IP67 Water Resistance"]
                    }
                },

            },

            /* Section of code holding Oneplus Device data */
            OnePlus: {

                OnePlus_12: {
                    name: "OnePlus 12",
                    ram: ["12GB", "16GB", "24GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Silky Black", "Flowy Emerald"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/oneplus/12",
                    features: {
                        display: "6.82” 2K LTPO AMOLED (X1 'Oriental' Screen)",
                        resolution: "3168 × 1440",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 3",
                        rearCamera: "50MP Wide (Sony LYT-808, f/1.6) + 64MP Periscope Telephoto (3x, f/2.6) + 48MP Ultra-Wide (f/2.2)",
                        frontCamera: "32MP (f/2.4)",
                        battery: "5400mAh",
                        charging: "100W Wired (SUPERVOOC), 50W Wireless (AirVOOC)",
                        os: "Android 14 (OxygenOS 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame + Gorilla Glass Victus 2",
                        special: [
                            "Alert Slider", "4th Gen Hasselblad Camera for Mobile", "100W Fast Charging", "Vapor Chamber Cooling System", "IP65 Rating"
                        ]
                    }
                },

                OnePlus_11: {
                    name: "OnePlus 11",
                    ram: ["8GB", "16GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Titan Black", "Eternal Green"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/oneplus/11",
                    features: {
                        display: "6.7” 2K LTPO AMOLED",
                        resolution: "3216 × 1440",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 2",
                        rearCamera: "50MP Wide (f/1.8) + 48MP Ultra-Wide (f/2.2) + 32MP Telephoto (2x, f/2.0)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "100W Wired (SUPERVOOC)",
                        os: "Android 13 (OxygenOS 13)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame + Gorilla Glass Victus",
                        special: ["Alert Slider", "Hasselblad Camera for Mobile", "100W Fast Charging"]
                    }
                },

                OnePlus_Nord_CE_3_Lite: {
                    name: "OnePlus Nord CE 3 Lite",
                    ram: ["8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Pastel Lime", "Chromatic Gray"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/oneplus/nord_ce_3_lite",
                    features: {
                        display: "6.72” LCD",
                        resolution: "2400 × 1080",
                        refreshRate: "120Hz",
                        chipset: "Snapdragon 695 5G",
                        rearCamera: "108MP Main (f/1.8) + 2MP Macro (f/2.4) + 2MP Depth (f/2.4)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "67W Wired (SUPERVOOC)",
                        os: "Android 13 (OxygenOS 13.1)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Plastic Frame & Back",
                        special: ["3.5mm Headphone Jack", "67W Fast Charging", "High-Refresh-Rate Display"]
                    }
                },

            },

            /* Section of code holding Xiaomi Device data */
            Xiaomi: {

                Xiaomi_14_Ultra: {
                    name: "Xiaomi 14 Ultra",
                    ram: ["12GB", "16GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Black", "White", "Blue"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked"],
                    imageFolder: "images/xiaomi/14_ultra",
                    features: {
                        display: "6.73” C8 LTPO AMOLED",
                        resolution: "3200 x 1440",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8 Gen 3",
                        rearCamera: "50MP Main (LYT-900, f/1.6-f/4.0) + 50MP Ultra-Wide (f/1.8) + 50MP Periscope Telephoto (3.2x, f/1.8) + 50MP Periscope Telephoto (5x, f/2.5)",
                        frontCamera: "32MP (f/2.0)",
                        battery: "5300mAh",
                        charging: "90W Wired, 80W Wireless",
                        os: "Android 14 (HyperOS)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame, Nano-Tech Vegan Leather or Ceramic Back",
                        special: ["Leica Summilux Lenses", "Professional Photography Kit Support", "Two-Way Satellite Communication", "IP68 Water Resistance"]
                    }
                },

                Xiaomi_13T_Pro: {
                    name: "Xiaomi 13T Pro",
                    ram: ["12GB", "16GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Alpine Blue", "Meadow Green", "Black"],
                    unlockStatus: ["Factory Unlocked", "Temporary Unlocked"],
                    imageFolder: "images/xiaomi/13t_pro",
                    features: {
                        display: "6.67” CrystalRes AMOLED",
                        resolution: "2712 x 1220",
                        refreshRate: "144Hz",
                        chipset: "MediaTek Dimensity 9200+",
                        rearCamera: "50MP Main (f/1.7) + 50MP Telephoto (2x, f/1.7) + 12MP Ultra-Wide (f/2.2)",
                        frontCamera: "20MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "120W HyperCharge",
                        os: "Android 13 (MIUI 14, Upgradable to HyperOS)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame",
                        special: ["Leica Vario-Summicron Camera System", "144Hz Display", "120W HyperCharge", "IP68 Water Resistance"]
                    }
                },
            },

            /* Section of code holding Redmi Device data */
            Redmi: {

                Redmi_Note_13_Pro_Plus_5G: {
                    name: "Redmi Note 13 Pro+ 5G",
                    ram: ["8GB", "12GB"],
                    storages: ["256GB", "512GB"],
                    colors: ["Arctic White", "Midnight Black", "Aurora Purple"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/note_13_pro_plus_5g",
                    features: {
                        display: "6.67” 1.5K CrystalRes Flow AMOLED",
                        resolution: "2712 x 1220",
                        refreshRate: "120Hz",
                        chipset: "MediaTek Dimensity 7200-Ultra",
                        rearCamera: "200MP Main (f/1.7) + 8MP Ultra-Wide (f/2.2) + 2MP Macro (f/2.4)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "120W HyperCharge",
                        os: "Android 13 (MIUI 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "IP68 Water & Dust Resistance",
                        special: ["200MP Main Camera", "120W Fast Charging", "IP68 Rating (Rare in segment)", "In-Display Fingerprint Sensor"]
                    }
                },

                Redmi_Note_13_Pro_5G: {
                    name: "Redmi Note 13 Pro 5G",
                    ram: ["8GB", "12GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["Arctic White", "Midnight Black", "Aurora Purple"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/note_13_pro_5g",
                    features: {
                        display: "6.67” 1.5K AMOLED",
                        resolution: "2712 x 1220",
                        refreshRate: "120Hz",
                        chipset: "Snapdragon 7s Gen 2",
                        rearCamera: "200MP Main (f/1.7) + 8MP Ultra-Wide (f/2.2) + 2MP Macro (f/2.4)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5100mAh",
                        charging: "67W Turbo Charging",
                        os: "Android 13 (MIUI 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Gorilla Glass 5 Front",
                        special: ["200MP Main Camera", "67W Fast Charging", "3.5mm Headphone Jack"]
                    }
                },

                Redmi_Note_13_5G: {
                    name: "Redmi Note 13 5G",
                    ram: ["6GB", "8GB", "12GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Arctic White", "Midnight Black", "Aurora Purple"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/note_13_5g",
                    features: {
                        display: "6.67” FHD+ AMOLED",
                        resolution: "2400 x 1080",
                        refreshRate: "120Hz",
                        chipset: "MediaTek Dimensity 6080",
                        rearCamera: "100MP Main (f/1.8) + 2MP Macro (f/2.4)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "33W Fast Charging",
                        os: "Android 13 (MIUI 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "IP54 Splash Resistant",
                        special: ["100MP Main Camera", "120Hz AMOLED Display", "5G Connectivity"]
                    }
                },

                Redmi_13C_5G: {
                    name: "Redmi 13C 5G",
                    ram: ["4GB", "6GB", "8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Starlight Black", "Startrail Green", "Startrail Silver"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/13c_5g",
                    features: {
                        display: "6.74” IPS LCD",
                        resolution: "1600 x 720",
                        refreshRate: "90Hz",
                        chipset: "MediaTek Dimensity 6100+",
                        rearCamera: "50MP Main (f/1.8) + 0.08MP Auxiliary",
                        frontCamera: "5MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "18W Charging",
                        os: "Android 13 (MIUI 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "",
                        special: ["Most Affordable 5G Phone", "90Hz Display", "Side-Mounted Fingerprint Sensor"]
                    }
                },

                Redmi_12_5G: {
                    name: "Redmi 12 5G",
                    ram: ["4GB", "6GB", "8GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Moonstone Silver", "Pastel Blue", "Jade Black"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/12_5g",
                    features: {
                        display: "6.79” IPS LCD",
                        resolution: "2460 × 1080",
                        refreshRate: "90Hz",
                        chipset: "Snapdragon 4 Gen 2",
                        rearCamera: "50MP Main (f/1.8) + 2MP Depth (f/2.4)",
                        frontCamera: "8MP (f/2.1)",
                        battery: "5000mAh",
                        charging: "18W Charging",
                        os: "Android 13 (MIUI 14)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Glass-like Back",
                        special: ["Entry-Level 5G", "90Hz Display", "Large Screen"]
                    }
                },

                Redmi_A3: {
                    name: "Redmi A3",
                    ram: ["3GB", "4GB"],
                    storages: ["64GB", "128GB"],
                    colors: ["Olive Green", "Lake Blue", "Midnight Black"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/a3",
                    features: {
                        display: "6.71” HD+ IPS LCD",
                        resolution: "1650 x 720",
                        refreshRate: "90Hz",
                        chipset: "MediaTek Helio G36",
                        rearCamera: "8MP Main (f/2.0) + 0.08MP Auxiliary",
                        frontCamera: "5MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "10W Charging",
                        os: "Android 13 (Go Edition)",
                        network: "4G / Dual SIM (Nano-SIM)",
                        build: "Glass-like Back",
                        special: ["Ultra-Budget Friendly", "90Hz Display for price", "Long Battery Life"]
                    }
                },

                Redmi_A2: {
                    name: "Redmi A2",
                    ram: ["2GB", "3GB"],
                    storages: ["32GB", "64GB"],
                    colors: ["Light Green", "Light Blue", "Black"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/redmi/a2",
                    features: {
                        display: "6.52” HD+ IPS LCD",
                        resolution: "1600 x 720",
                        refreshRate: "60Hz",
                        chipset: "MediaTek Helio G36",
                        rearCamera: "8MP Main (f/2.0) + 0.08MP Auxiliary",
                        frontCamera: "5MP (f/2.2)",
                        battery: "5000mAh",
                        charging: "10W Charging",
                        os: "Android 13 (Go Edition)",
                        network: "4G / Dual SIM (Nano-SIM)",
                        build: "",
                        special: ["Essential Smartphone", "Affordable Price Point"]
                    }
                }

            },

            /* Section of code holding Realme Device data */
            Realme: {

                Realme_GT_5: {
                    name: "Realme GT 5",
                    ram: ["12GB", "16GB", "24GB"],
                    storages: ["256GB", "512GB", "1TB", "2TB"],
                    colors: ["Fluid Silver", "Starry Oasis"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/realme/gt_5",
                    features: {
                        display: "6.74” AMOLED",
                        resolution: "2772 × 1240",
                        refreshRate: "144Hz",
                        chipset: "Snapdragon 8 Gen 2",
                        rearCamera: "50MP Main (Sony IMX890, f/1.9) + 8MP Ultra-Wide (f/2.2) + 2MP Macro (f/2.4)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5240mAh",
                        charging: "150W / 240W (Model Dependent)",
                        os: "Android 13 (Realme UI 4.0)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Plastic Frame, Glass Back",
                        special: ["Pulse Interface Design (RGB)", "Extreme Performance Mode", "150W/240W Fast Charging", "Up to 24GB RAM"]
                    }
                },

                Realme_11_Pro_Plus: {
                    name: "Realme 11 Pro+",
                    ram: ["8GB", "12GB"],
                    storages: ["256GB", "512GB", "1TB"],
                    colors: ["Sunrise Beige", "Oasis Green", "Astral Black"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/realme/11_pro_plus",
                    features: {
                        display: "6.7” Curved AMOLED",
                        resolution: "2412 x 1080",
                        refreshRate: "120Hz",
                        chipset: "MediaTek Dimensity 7050",
                        rearCamera: "200MP Main (Samsung HP3, f/1.7) + 8MP Ultra-Wide (f/2.2) + 2MP Macro (f/2.4)",
                        frontCamera: "32MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "100W SUPERVOOC",
                        os: "Android 13 (Realme UI 4.0)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Vegan Leather Back",
                        special: ["200MP In-Sensor Zoom", "Premium Curved Design", "100W Fast Charging", "Segment-leading Camera"]
                    }
                },

            },

            /* Section of code holding Nothing Device data */
            Nothing: {

                Nothing_Phone_2: {
                    name: "Nothing Phone (2)",
                    ram: ["8GB", "12GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["White", "Dark Gray"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/nothing/phone_2",
                    features: {
                        display: "6.7” LTPO OLED",
                        resolution: "2412 × 1080",
                        refreshRate: "1–120Hz Adaptive",
                        chipset: "Snapdragon 8+ Gen 1",
                        rearCamera: "50MP Main (Sony IMX890, f/1.9) + 50MP Ultra-Wide (Samsung JN1, f/2.2)",
                        frontCamera: "32MP (f/2.5)",
                        battery: "4700mAh",
                        charging: "45W Wired, 15W Wireless, 5W Reverse",
                        os: "Android 13 (Nothing OS 2.0)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame, Recycled Materials",
                        special: ["Glyph Interface (LED Lights on Back)", "Transparent Design Aesthetic", "Monochrome UI & Widgets", "IP54 Rating"]
                    }
                },

                Nothing_Phone_1: {
                    name: "Nothing Phone (1)",
                    ram: ["8GB", "12GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["White", "Black"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/nothing/phone_1",
                    features: {
                        display: "6.55” OLED",
                        resolution: "2400 × 1080",
                        refreshRate: "60–120Hz Adaptive",
                        chipset: "Snapdragon 778G+",
                        rearCamera: "50MP Main (Sony IMX766, f/1.9) + 50MP Ultra-Wide (Samsung JN1, f/2.2)",
                        frontCamera: "16MP (f/2.5)",
                        battery: "4500mAh",
                        charging: "33W Wired, 15W Wireless, 5W Reverse",
                        os: "Android 12 (Upgradable to Nothing OS 2.5)",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame, Recycled Materials",
                        special: ["Iconic Glyph Interface", "Transparent Design", "Unique User Experience", "IP53 Rating"]
                    }
                },

            },

            /* Section of code holding Motorola Device data */
            Motorola: {

                Motorola_Edge_40_Pro: {
                    name: "Motorola Edge 40 Pro / X40",
                    ram: ["8GB", "12GB"],
                    storages: ["128GB", "256GB", "512GB"],
                    colors: ["Black", "Blue"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/motorola/edge_40_pro",
                    features: {
                        display: "6.67” p-OLED",
                        resolution: "2400 × 1080",
                        refreshRate: "165Hz",
                        chipset: "Snapdragon 8 Gen 2",
                        rearCamera: "50MP Main (f/1.5) + 50MP Ultra-Wide (f/2.2) + 12MP Telephoto (2x, f/1.6)",
                        frontCamera: "60MP (f/2.2)",
                        battery: "4600mAh",
                        charging: "125W Wired, 15W Wireless",
                        os: "Android 13",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Aluminum Frame, Gorilla Glass Victus",
                        special: ["165Hz Refresh Rate", "125W Hyper Fast Charging", "Ready For Platform", "IP68 Water Resistance"]
                    }
                },

                Motorola_Moto_G84: {
                    name: "Motorola Moto G84",
                    ram: ["8GB", "12GB"],
                    storages: ["128GB", "256GB"],
                    colors: ["Viva Magenta", "Marshmallow Blue", "Midnight Blue"],
                    unlockStatus: ["Factory Unlocked"],
                    imageFolder: "images/motorola/moto_g84",
                    features: {
                        display: "6.5” p-OLED",
                        resolution: "2400 × 1080",
                        refreshRate: "120Hz",
                        chipset: "Snapdragon 695",
                        rearCamera: "50MP Main (f/1.9) + 8MP Ultra-Wide (f/2.2)",
                        frontCamera: "16MP (f/2.4)",
                        battery: "5000mAh",
                        charging: "30W TurboPower",
                        os: "Android 13",
                        network: "5G / Dual SIM (Nano-SIM)",
                        build: "Vegan Leather Back (Viva Magenta)",
                        special: ["120Hz p-OLED Display", "Vegan Leather Option", "Stereo Speakers with Dolby Atmos", "3.5mm Headphone Jack"]
                    }
                },
            },

        };


        /* DOM CONNECTIONS */
        const brandSelect = document.getElementById("android_brand_selection");
        const modelSelect = document.getElementById("android_models");
        const storageSelect = document.getElementById("storage_size");
        const ramSelect = document.getElementById("ram_size");
        const colorSelect = document.getElementById("color");

        const previewModel = document.getElementById("previewModel");
        const previewStorage = document.getElementById("previewStorage");
        const previewRAM = document.getElementById("previewRAM");
        const previewColor = document.getElementById("previewColor");
        const previewImage = document.getElementById("previewImage");
        const featuresList = document.getElementById("featuresList");

        const storageGroup = document.querySelector(".storage-group");
        const ramGroup = document.querySelector(".ram-group");
        const colorGroup = document.querySelector(".color-group");


        /* GENERIC UTILITIES */
        function populateSelect(select, items, title) {
            select.innerHTML = `<option value="">${title}</option>`;
            items.forEach(v => select.appendChild(new Option(v, v)));
            select.disabled = false;
        }

        function clearSelect(select, title) {
            select.innerHTML = `<option value="">${title}</option>`;
            select.disabled = true;
        }

        function showFeatures(features) {
            featuresList.innerHTML = "";
            if (!features) return;

            Object.entries(features).forEach(([key, value]) => {
                if (key === "special") {
                    value.forEach(f => featuresList.innerHTML += `<li>${f}</li>`);
                } else {
                    featuresList.innerHTML += `<li><strong>${key.replace(/([A-Z])/g, ' $1').toUpperCase()}:</strong> ${value}</li>`;
                }
            });
        }


        /* BRAND → MODELS */
        brandSelect.addEventListener("change", () => {
            const brand = brandSelect.value;

            clearSelect(modelSelect, "Select Model");
            clearSelect(storageSelect, "Select Storage");
            clearSelect(ramSelect, "Select RAM");
            clearSelect(colorSelect, "Select Color");

            storageGroup.classList.add("hidden");
            ramGroup.classList.add("hidden");
            colorGroup.classList.add("hidden");

            featuresList.innerHTML = "";

            if (brand && deviceData[brand]) {
                populateSelect(modelSelect, Object.keys(deviceData[brand]), "Select Model");
            }
        });


        /* MODEL → STORAGE + RAM + COLOR + FEATURES */
        modelSelect.addEventListener("change", () => {
            const brand = brandSelect.value;
            const modelID = modelSelect.value;

            clearSelect(storageSelect, "Select Storage");
            clearSelect(ramSelect, "Select RAM");
            clearSelect(colorSelect, "Select Color");

            storageGroup.classList.add("hidden");
            ramGroup.classList.add("hidden");
            colorGroup.classList.add("hidden");

            featuresList.innerHTML = "";

            if (!modelID) return;

            const data = deviceData[brand][modelID];

            populateSelect(storageSelect, data.storages, "Select Storage");
            storageGroup.classList.remove("hidden");

            populateSelect(ramSelect, data.ram, "Select RAM");
            ramGroup.classList.remove("hidden");

            populateSelect(colorSelect, data.colors, "Select Color");
            colorGroup.classList.remove("hidden");

            showFeatures(data.features);
            updatePreview();
        });


        /* PREVIEW UPDATE */
        function updatePreview() {
            const brand = brandSelect.value;
            const modelID = modelSelect.value;
            const data = deviceData[brand]?.[modelID];
            if (!data) return;

            previewModel.textContent = `→ Model: ${data.name}`;
            previewStorage.textContent = `→ Storage: ${storageSelect.value}`;
            previewRAM.textContent = `→ RAM: ${ramSelect.value}`;
            previewColor.textContent = `→ Color: ${colorSelect.value}`;

            if (colorSelect.value) {
                const safeColor = colorSelect.value.toLowerCase().replace(/\s+/g, "_");
                const img = `${data.imageFolder}/${modelID}_${safeColor}.png`;
                previewImage.src = img;
                previewImage.onerror = () => previewImage.src = img.replace('.png', '.jpg');
                previewImage.style.display = "block";
            }
        }

        storageSelect.addEventListener("change", updatePreview);
        ramSelect.addEventListener("change", updatePreview);
        colorSelect.addEventListener("change", updatePreview);
    </script>

</body>

</html>