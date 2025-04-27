<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Simple navigation toggle
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = link.getAttribute('href').substring(1);
            document.querySelectorAll('.main-content section').forEach(section => {
                section.classList.add('d-none');
            });
            document.querySelector(`#${sectionId}`).classList.remove('d-none');
            document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
            link.classList.add('active');
        });
    });
</script>