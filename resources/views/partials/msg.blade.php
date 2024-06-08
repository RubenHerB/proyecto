@if(\Session::get("success"))
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const alertElement = document.createElement('div');
            alertElement.className = 'alert fade show alert-success text-center';
            alertElement.setAttribute('role', 'alert');
            alertElement.setAttribute('data-mdb-color', 'success');
            alertElement.style.position = 'fixed';
            alertElement.style.top = '20px';
            alertElement.style.right = '20px';
            alertElement.style.zIndex = '1050';
            alertElement.style.width = '300px';
            alertElement.innerHTML = `
                <p>{{ \Session::get("success") }}</p>
            `;
            document.body.appendChild(alertElement);
            setTimeout(() => {
                alertElement.classList.remove('show');
                alertElement.classList.add('fade');
                setTimeout(() => alertElement.remove(), 500);
            }, 2000);
        });
    </script>
@elseif(\Session::get("deny"))
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const alertElement = document.createElement('div');
            alertElement.className = 'alert fade show alert-danger text-center';
            alertElement.setAttribute('role', 'alert');
            alertElement.setAttribute('data-mdb-color', 'danger');
            alertElement.style.position = 'fixed';
            alertElement.style.top = '20px';
            alertElement.style.right = '20px';
            alertElement.style.zIndex = '1050';
            alertElement.style.width = '300px';
            alertElement.innerHTML = `
                <p>{{ \Session::get("deny") }}</p>
            `;
            document.body.appendChild(alertElement);
            setTimeout(() => {
                alertElement.classList.remove('show');
                alertElement.classList.add('fade');
                setTimeout(() => alertElement.remove(), 500);
            }, 2000);
        });
    </script>
@endif
