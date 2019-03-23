import swal from 'sweetalert';

class Alert {

    static message(title, icon) {
        swal({
            title: title,
            icon: icon,
        });
    }

    static success(title) {
        this.message(title, 'success')
    }

    static error(title) {
        this.message(title, 'error')
    }
}

export default Alert;
