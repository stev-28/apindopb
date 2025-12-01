{{-- Script JS untuk Mobile Menu & Lucide Icons --}}
<script>
    // Inisialisasi Lucide Icons
    lucide.createIcons();

    // Toggle Menu Mobile
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Sembunyikan menu mobile saat link diklik
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    });

    // Script untuk memastikan smooth scrolling ke section
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Auto-hide alerts after 8 seconds (lebih lama untuk notifikasi sukses)
    setTimeout(function() {
        const successAlert = document.getElementById('success-alert');
        const errorAlert = document.getElementById('error-alert');
        if (successAlert) {
            successAlert.style.transition = 'opacity 0.5s ease-out';
            successAlert.style.opacity = '0';
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 500);
        }
        if (errorAlert) {
            errorAlert.style.transition = 'opacity 0.5s ease-out';
            errorAlert.style.opacity = '0';
            setTimeout(() => {
                errorAlert.style.display = 'none';
            }, 500);
        }
    }, 8000);

    // Animasi fade-in untuk notifikasi sukses di form
    const successFormAlert = document.querySelector('.animate-fade-in');
    if (successFormAlert) {
        successFormAlert.style.animation = 'fadeIn 0.5s ease-in';
        
        // Reset form setelah sukses
        const form = document.querySelector('form[action*="pendaftaran"]');
        if (form) {
            form.reset();
            // Reset border colors
            form.querySelectorAll('input, select, textarea').forEach(field => {
                field.classList.remove('border-red-500', 'border-green-500');
            });
        }
    }

    // Validasi Form Pendaftaran - Semua field wajib diisi
    const formPendaftaran = document.querySelector('form[action*="pendaftaran"]');
    if (formPendaftaran) {
        formPendaftaran.addEventListener('submit', function(e) {
            const nama = document.getElementById('nama').value.trim();
            const kabupaten = document.getElementById('kabupaten').value.trim();
            const email = document.getElementById('email').value.trim();
            const telepon = document.getElementById('telepon').value.trim();
            const suratMandat = document.getElementById('surat_mandat').files.length;

            let isValid = true;
            let errorMessage = '';

            // Validasi Nama
            if (!nama) {
                isValid = false;
                errorMessage += '• Nama lengkap wajib diisi.\n';
                document.getElementById('nama').classList.add('border-red-500');
            } else {
                document.getElementById('nama').classList.remove('border-red-500');
            }

            // Validasi Kabupaten
            if (!kabupaten) {
                isValid = false;
                errorMessage += '• Asal kabupaten wajib diisi.\n';
                document.getElementById('kabupaten').classList.add('border-red-500');
            } else {
                document.getElementById('kabupaten').classList.remove('border-red-500');
            }

            // Validasi Email
            if (!email) {
                isValid = false;
                errorMessage += '• Email wajib diisi.\n';
                document.getElementById('email').classList.add('border-red-500');
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                isValid = false;
                errorMessage += '• Format email tidak valid.\n';
                document.getElementById('email').classList.add('border-red-500');
            } else {
                document.getElementById('email').classList.remove('border-red-500');
            }

            // Validasi Telepon
            if (!telepon) {
                isValid = false;
                errorMessage += '• Nomor telepon wajib diisi.\n';
                document.getElementById('telepon').classList.add('border-red-500');
            } else {
                document.getElementById('telepon').classList.remove('border-red-500');
            }

            // Validasi Surat Mandat
            if (!suratMandat) {
                isValid = false;
                errorMessage += '• Surat Mandat dan/atau Surat Keputusan Caretaker DPK wajib dilampirkan.\n';
                document.getElementById('surat_mandat').classList.add('border-red-500');
            } else {
                document.getElementById('surat_mandat').classList.remove('border-red-500');
                
                // Validasi ukuran file (2 MB = 2097152 bytes)
                const file = document.getElementById('surat_mandat').files[0];
                if (file.size > 2097152) {
                    isValid = false;
                    errorMessage += '• Ukuran file maksimal 2 MB.\n';
                    document.getElementById('surat_mandat').classList.add('border-red-500');
                } else {
                    // Validasi format file
                    const allowedTypes = ['application/pdf', 'image/jpeg', 'image/jpg'];
                    if (!allowedTypes.includes(file.type)) {
                        isValid = false;
                        errorMessage += '• File harus berupa PDF atau JPEG.\n';
                        document.getElementById('surat_mandat').classList.add('border-red-500');
                    }
                }
            }

            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi:\n\n' + errorMessage);
                // Scroll ke form
                document.getElementById('pendaftaran').scrollIntoView({ behavior: 'smooth', block: 'start' });
                return false;
            }
        });

        // Real-time validation feedback
        const formFields = ['nama', 'kabupaten', 'email', 'telepon', 'surat_mandat'];
        formFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field) {
                field.addEventListener('blur', function() {
                    if (this.value.trim() || (this.type === 'file' && this.files.length > 0)) {
                        this.classList.remove('border-red-500');
                        this.classList.add('border-green-500');
                    } else {
                        this.classList.remove('border-green-500');
                    }
                });
            }
        });
    }
</script>

