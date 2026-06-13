<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Inventory Management - RetailERP</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-background": "#191b23",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-highest": "#e1e2ed",
                    "tertiary-fixed-dim": "#bec6e0",
                    "surface-container-low": "#f3f3fe",
                    "secondary-fixed": "#e0e3e5",
                    "on-primary-fixed": "#00174b",
                    "on-secondary-fixed-variant": "#444749",
                    "on-primary-container": "#eeefff",
                    "on-tertiary": "#ffffff",
                    "on-error": "#ffffff",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed": "#191c1e",
                    "inverse-on-surface": "#f0f0fb",
                    "background": "#faf8ff",
                    "tertiary-fixed": "#dae2fd",
                    "primary-fixed": "#dbe1ff",
                    "surface-container-high": "#e7e7f3",
                    "primary-fixed-dim": "#b4c5ff",
                    "tertiary-container": "#656d84",
                    "inverse-surface": "#2e3039",
                    "error-container": "#ffdad6",
                    "tertiary": "#4d556b",
                    "surface-container": "#ededf9",
                    "primary": "#004ac6",
                    "surface-tint": "#0053db",
                    "surface-bright": "#faf8ff",
                    "secondary-fixed-dim": "#c4c7c9",
                    "on-tertiary-fixed": "#131b2e",
                    "error": "#ba1a1a",
                    "primary-container": "#2563eb",
                    "outline-variant": "#c3c6d7",
                    "secondary-container": "#e0e3e5",
                    "on-secondary-container": "#626567",
                    "on-tertiary-fixed-variant": "#3f465c",
                    "secondary": "#5c5f61",
                    "inverse-primary": "#b4c5ff",
                    "surface-dim": "#d9d9e5",
                    "on-secondary": "#ffffff",
                    "on-primary": "#ffffff",
                    "on-surface": "#191b23",
                    "on-primary-fixed-variant": "#003ea8",
                    "outline": "#737686",
                    "on-tertiary-container": "#eef0ff",
                    "surface": "#faf8ff",
                    "on-surface-variant": "#434655",
                    "surface-variant": "#e1e2ed"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "unit": "8px",
                    "margin": "32px",
                    "container-max": "1440px",
                    "gutter": "24px",
                    "sidebar-width": "260px"
            },
            "fontFamily": {
                    "data-tabular": ["Inter"],
                    "label-caps": ["Inter"],
                    "h2": ["Inter"],
                    "h1": ["Inter"],
                    "h3": ["Inter"],
                    "body-md": ["Inter"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "data-tabular": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                    "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "h1": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "h3": ["18px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-surface">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-full w-sidebar-width bg-surface dark:bg-inverse-surface shadow-sm flex flex-col p-4 transition-all duration-200 z-50">
<div class="mb-8 px-2">
<h1 class="font-h2 text-h2 text-primary dark:text-inverse-primary">RetailERP</h1>
<p class="text-body-sm text-on-surface-variant">Small Business Admin</p>
</div>
<nav class="flex-grow space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors font-body-md text-body-md" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-container-low dark:bg-surface-container-highest text-primary font-bold border-l-4 border-primary font-body-md text-body-md" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors font-body-md text-body-md" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span>Transactions</span>
</a>
</nav>
<div class="mt-auto pt-4 border-t border-outline-variant">
<div class="flex items-center gap-3 px-2">
<img alt="Admin User Profile" class="w-10 h-10 rounded-full bg-surface-container-highest" data-alt="A professional headshot of a corporate administrator in a bright, modern office setting. The lighting is soft and natural, emphasizing a friendly yet authoritative demeanor. The overall aesthetic is clean and high-fidelity, aligned with a premium business software interface using a palette of soft blues and greys." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRGmGxbcOAajGiqz2rNLrAj_XU3qyfcNRE5xmZO-fZMr7YCmIhjOrdGlY2b1VnYoANtuWcCnV5XYS0kQ_iNtAdImf5WK_IjY9RSniTxYsPtZp0KGZ8Oeat-oOe6d0r8ZZRbLh2NETrefaoKkR_JcL_00FZ4VN7enryjeFiA8LKVxIer2HmqObo3N1C0hihavs1g7cb_X6HIRO5RB8IdowTzDqx32aYSyf0eO6EluMN8-TE_Fx4LTzWKpVr26D-GvQycDi1qo--me0"/>
<div>
<p class="text-body-sm font-bold text-on-surface">Alex Rivera</p>
<p class="text-[12px] text-on-surface-variant">Admin Access</p>
</div>
</div>
</div>
</aside>
<!-- Top Navigation Bar -->
<header class="fixed top-0 right-0 left-0 ml-sidebar-width h-16 bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline flex justify-between items-center px-margin z-40">
<div class="flex items-center gap-4 flex-grow max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-sm text-body-sm" placeholder="Search inventory..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="relative p-2 text-on-surface-variant hover:text-primary transition-transform scale-95 active:scale-90">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="bg-primary text-on-primary px-6 py-2 rounded-xl font-bold flex items-center gap-2 transition-transform scale-95 active:scale-90 shadow-sm hover:brightness-110">
<span class="material-symbols-outlined" data-icon="add">add</span>
                Add Product
            </button>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-sidebar-width pt-16 min-h-screen">
<div class="p-margin max-w-container-max mx-auto">
<!-- Inventory Metrics Header -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-8">
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(0,0,0,0.03)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider mb-2">Total Items</p>
<h2 class="text-h1 font-h1 text-on-surface">1,284</h2>
</div>
<div class="mt-4 flex items-center gap-2 text-primary font-bold text-body-sm">
<span class="material-symbols-outlined text-[18px]" data-icon="trending_up">trending_up</span>
<span>+12% this month</span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(0,0,0,0.03)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider mb-2">Active Categories</p>
<h2 class="text-h1 font-h1 text-on-surface">18</h2>
</div>
<div class="mt-4 flex items-center gap-2 text-on-surface-variant text-body-sm">
<span>4 added recently</span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(0,0,0,0.03)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider mb-2">Stock Value</p>
<h2 class="text-h1 font-h1 text-on-surface">$42,850</h2>
</div>
<div class="mt-4 flex items-center gap-2 text-on-surface-variant text-body-sm">
<span>Updated 2h ago</span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(0,0,0,0.03)] border-l-4 border-l-error flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider mb-2">Low Stock Alerts</p>
<h2 class="text-h1 font-h1 text-error">9</h2>
</div>
<div class="mt-4 flex items-center gap-2 text-error font-bold text-body-sm">
<span class="material-symbols-outlined text-[18px]" data-icon="warning">warning</span>
<span>Action required</span>
</div>
</div>
</div>
<!-- Main Data Table Section -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(0,0,0,0.03)] overflow-hidden">
<div class="px-6 py-5 border-b border-outline-variant flex justify-between items-center">
<h3 class="font-h3 text-h3 text-on-surface">Product Inventory</h3>
<div class="flex items-center gap-2">
<button class="p-2 text-on-surface-variant hover:bg-surface-container transition-colors rounded-lg">
<span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-surface-container transition-colors rounded-lg">
<span class="material-symbols-outlined" data-icon="download">download</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low">
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant">Product Name</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant">SKU</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant">Category</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant">Stock Level</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant text-right">Price</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant border-b border-outline-variant text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Product Thumbnail" class="object-cover" data-alt="A high-quality studio photograph of a premium ergonomic wireless keyboard on a minimalist desk. The lighting is bright and clean, emphasizing its sleek metallic finish. The overall composition is professional and modern, using a light-mode aesthetic consistent with corporate ERP software imagery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuATHVfS8dN1s2bTdrp_5PrzedUzMdnyEAtqo1Vl5z1pOIrIrL8ZJ4ADUBo7MrRhuXnc53a5TfpJgmQoJKo5MBBv1i2K2aVN2ekCwjZyQvaAJ2nkechakTduwFcaZw3kqvIH9HCcChzrDN0B9PNs6DPgPunJSqGAqPkVufQQynkaw2YBNz5HOo0dGMV-n-P_v263I737xz-ZFnws5LXI12h77BxjoXbmIXXlT6a21xi-wg7zdkMpzPHyO2qn5k_9ZFI4mlhNgD5R__A"/>
</div>
<span class="font-data-tabular text-data-tabular text-on-surface">Precision Keyboard MX</span>
</div>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">KB-MX-2024</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">Electronics</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-[12px] font-bold bg-primary/10 text-primary border border-primary/20">In Stock (142)</span>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface text-right">$129.00</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Product Thumbnail" class="object-cover" data-alt="A crisp, high-detail macro shot of a sleek silver fountain pen lying on top of a premium leather-bound notebook. The lighting is soft and directional, creating a sophisticated corporate ambiance. The image is clean and minimalist, following the modern corporate design guidelines of the interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoMtTRTbb93rCKMw74AYuB1FpRfQfi2_ZqeYpyM6ealkFugJeOoLFCTrb7aamkjPvhjF-B0UaScyUWIcXNle4IsvTN0BAGZ5vW_q-0nKLQKfhE38__qAjef3NesiY7ohBmZXgUqci_fQCs6Phv_7F07zoypTUdTYq3Avdh3YaMHSlHBd-RxRkG2-huLiwYpfSjf8PoR_nrWtaDQEtGDOSlgEP3SFhAg28wd4ngIL2-jx_Y0isBgRKsD4lvJ27LdtGrqCWegSFs__A"/>
</div>
<span class="font-data-tabular text-data-tabular text-on-surface">Titanium Executive Pen</span>
</div>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">PEN-TIT-09</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">Office Supplies</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-[12px] font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">Low Stock (8)</span>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface text-right">$85.50</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Product Thumbnail" class="object-cover" data-alt="A professional product shot of a minimal white designer office chair against a neutral grey background. The lighting is high-key and even, conveying quality and comfort. The image aesthetics are meticulously aligned with a high-end, clean corporate dashboard environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgom6cxM-zfFCknxGCw1OddgU1Z0ZjW1PBJ3IzA6wvKzwZvf8gpH51GlQdLWTfrNOY4ko5nB5v8bh53NAaNFSdbLsZV_dzyOwJF-w4Dznxgic8axi1nNwOiKOBrEJnD1-DUBkZ4s8pJpdISETkl0Ea4LXU4bZ9iEfVOkL--j3PqhaA3aou770zgNenwCKpmblV-L8RT1Ca1_bKyED-C_9KKi4TtgH5tzX9_PewfYzsd0pUumQE1Gnq4S2wYj9IZdw1kXO-XsadSPA"/>
</div>
<span class="font-data-tabular text-data-tabular text-on-surface">ErgoPro Series 5 Chair</span>
</div>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">CH-ERG-500</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">Furniture</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-[12px] font-bold bg-primary/10 text-primary border border-primary/20">In Stock (24)</span>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface text-right">$499.00</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Product Thumbnail" class="object-cover" data-alt="A sharp, clear photograph of a set of high-end noise-canceling headphones resting on a minimalist glass side table. The mood is serene and technologically sophisticated, with soft blue ambient light reflections. The image serves as a clean, professional placeholder for a modern retail inventory system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6l0uoCmWxhHCqFFtoNs0mrhN9vZNkz3aYax7-UwKxGFa-So8SnFwCOufQ9kRWsTxNvevonQ-X7xrjULxc1mReW3rI3wsUh4gLg8ouCEdKhQaitMHXDrwu4tFZ3UZGgFuzCtUxanvYtH3hOSXyHNZJsm0vopRpLHVmPJzCpXXzuXn1ZiJEkMzCw-LqlVO6_6Ocphz7Kb7-7yVW0mUN13hZFhtgYx8dVHQfu8NSvM7xlCSOz-_PzR2DxFNIa2n3AyjCUnIA-LMGs6Y"/>
</div>
<span class="font-data-tabular text-data-tabular text-on-surface">UltraSync Noise-Canceling Headphones</span>
</div>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">AUD-US-102</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">Electronics</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-[12px] font-bold bg-primary/10 text-primary border border-primary/20">In Stock (86)</span>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface text-right">$299.99</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Product Thumbnail" class="object-cover" data-alt="A high-end professional camera lens positioned artistically on a textured grey background. The lighting highlights the intricate details of the glass and metallic housing. The overall style is clean, sharp, and corporate, fitting perfectly into a modern enterprise inventory application." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5ToVHBjq9xAkobAWE8uij-8Ez-OhDqBM9wQKyGrPmFJRQfJrAFJuPhjsm9gn6DIfcJVrFmQuICgZ-N2rU0IkVMP0qXpH9Gnmtob56GLCCh7ljPUSsikkPCIwzhE_LrU5A9yTKWrkAdv8Ag-uSX9ckVuKNVXRX_PgdZfVDq2hxfZXsEgcwIrMHbTEi-ao_hM3-f8e3D5CodQ7NBtHrUng0QVCT2wLyqKA2fFURLe2_qIz23OGYlTlmy8hvUe940Ay2PEKOSKSpDEY"/>
</div>
<span class="font-data-tabular text-data-tabular text-on-surface">Lumina 50mm f/1.2 Lens</span>
</div>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">CAM-LUM-50</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface-variant">Photography</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-[12px] font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">Low Stock (3)</span>
</td>
<td class="px-6 py-4 font-data-tabular text-data-tabular text-on-surface text-right">$1,450.00</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 bg-surface-container-low flex justify-between items-center border-t border-outline-variant">
<p class="text-body-sm text-on-surface-variant">Showing 1 to 5 of 1,284 entries</p>
<div class="flex items-center gap-1">
<button class="px-3 py-1 text-on-surface-variant hover:bg-surface-container rounded transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_left">chevron_left</span>
</button>
<button class="px-3 py-1 bg-primary text-on-primary rounded font-bold">1</button>
<button class="px-3 py-1 text-on-surface-variant hover:bg-surface-container rounded transition-colors">2</button>
<button class="px-3 py-1 text-on-surface-variant hover:bg-surface-container rounded transition-colors">3</button>
<span class="px-2 text-on-surface-variant">...</span>
<button class="px-3 py-1 text-on-surface-variant hover:bg-surface-container rounded transition-colors">257</button>
<button class="px-3 py-1 text-on-surface-variant hover:bg-surface-container rounded transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Contextual Help / Tips Section (Asymmetric Pattern) -->
<div class="mt-8 flex flex-col md:flex-row gap-gutter">
<div class="flex-grow bg-primary-container text-on-primary-container p-8 rounded-xl relative overflow-hidden">
<div class="relative z-10">
<h3 class="font-h3 text-h3 mb-4">Inventory Insights</h3>
<p class="body-md text-body-md opacity-90 max-w-lg mb-6">Your electronics category has seen a 25% increase in demand this week. Consider restocking high-performing items like the 'Precision Keyboard MX' to avoid potential stockouts.</p>
<button class="bg-on-primary-container text-primary-container px-6 py-2.5 rounded-xl font-bold hover:opacity-90 transition-all">View Analytics</button>
</div>
<div class="absolute right-[-20px] top-[-20px] opacity-10">
<span class="material-symbols-outlined text-[200px]" data-icon="analytics">analytics</span>
</div>
</div>
<div class="md:w-1/3 bg-surface-container-highest p-8 rounded-xl border border-outline-variant">
<h3 class="font-h3 text-h3 text-on-surface mb-4">Recent Activity</h3>
<ul class="space-y-4">
<li class="flex gap-3">
<div class="w-2 h-2 rounded-full bg-primary mt-2"></div>
<div>
<p class="text-body-sm font-bold text-on-surface">Stock updated</p>
<p class="text-[12px] text-on-surface-variant">12 items added to Office Supplies</p>
</div>
</li>
<li class="flex gap-3">
<div class="w-2 h-2 rounded-full bg-error mt-2"></div>
<div>
<p class="text-body-sm font-bold text-on-surface">Low stock alert</p>
<p class="text-[12px] text-on-surface-variant">Lumina Lens reached threshold (3)</p>
</div>
</li>
<li class="flex gap-3">
<div class="w-2 h-2 rounded-full bg-primary mt-2"></div>
<div>
<p class="text-body-sm font-bold text-on-surface">Price changed</p>
<p class="text-[12px] text-on-surface-variant">MX Keyboard updated to $129.00</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</main>
</body></html>
