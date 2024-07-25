// Thực hiện chức năng Danh sách, Thêm, Sửa, Xóa cho Product
// Thêm mới: Danh mục sản phẩm(categoryId): sử dụng thẻ select-option
// Yêu cầu validate: 
/*
    Tên sản phẩm(name): không để trống
    Số lượng(quantity): Không để trống và lớn hơn 0
    Danh mục sản phẩm(categoryId): Lựa chọn mặc định giá trị đầu tiên
*/
const app = angular.module("myApp", []);
function myFunction($scope, $http) {  

    $scope.listProducts = [];

    $scope.listCategories = [
        {
            id: "abcd",
            title: "Laptop",
            value: false
        },
        {
            id: "efgh",
            title: "Mouse",
            value: false
        }
    ];

    $scope.dataInput = {
        categoryId: $scope.category[0].id
    };



    $scope.onSubmit = function () {
        $http.post('http://localhost:3000/products', $scope.dataInput)
        .then(
            function success(response) {
                alert("Thêm mới thành công");
            },
            function error(response) {
                alert("Thêm mới thất bại");
            }
        )
    }


}

app.controller("myController", myFunction);
