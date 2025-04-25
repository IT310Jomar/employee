$(document).ready(function() {
    $('#departmentTable').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        responsive: true,
        pagingType: "numbers",
    });

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right", 
        "timeOut": "3000", 
    };

    var departmentData;
    const submitDept = $('.submitDept');
    let deptName = $('#deptName');

    const displayDepartmentData = () => {
        axios.get('/api/auth/v1/departments')
            .then((response) => {
                departmentData = response.data.department;
                if (response.data.success) {
                    let table = $('#employeeTable').DataTable();
    
                    table.clear();
    
                    departmentData.forEach((dept, index) => {
                        table.row.add([
                            index + 1,
                            `<div class="text-center">${dept.name}</div>`,  
                            `<div class="text-center"><a href="#" class="btn btn-primary  active" aria-pressed="true">Edit</a></div>` 
                        ]);
                    });
    
                    table.draw(false);
                }
            }).catch((error) => {
                console.error(error)
            })
    }
    

    displayDepartmentData()

    $(document).on('click','.addDept',()=>{
       $('.addModal').show();
    })

    
    submitDept.on('click',()=>{
        if(deptName.val().trim() === ""){
            toastr.error('Please fill out field')
            return

        }

        let formData = new FormData()
        formData.append('department_name', deptName.val().trim())
        axios.post('/api/auth/add-department',formData)
        .then((response) => {
            // console.log(response)
            displayDepartmentData()
            closeModal()
            deptName.val('')
            toastr.success('Department added successfully!')
            

        }).catch((error)=>{
            console.error(error)
        })
    })

   
//ajax
    // $.ajax({
    //     url: '/api/auth/v1/employees',
    //     type: 'GET',
    //     success: function(response) {
    //         if (response.success) {
    //           console.log(response)
    //         }
    //     },
    //     error: function(xhr, status, error) {
    //         console.error(xhr.responseText);
    //     }
    // });

    // $(document).on("click", ".del", function(){
    //     console.log('click');
    // });

// axios
    // axios.get('/api/auth/v1/employees')
    // .then(function(response){
    //     if(response.data.success){
    //         console.log(response.data.easy)
    //     }
    // }).catch(function(error){
    //     console.log(error)
    // })

    // Using Fetch API
    fetch('/api/auth/v1/employees')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });

});

function closeModal(){
        $('.addModal').hide(); 

}


