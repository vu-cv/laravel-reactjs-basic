
var SinhVien = createReactClass({
	create: function(){
		this.props.create(this.props.data.id);
	},
  render: function () {
    return (
      <tr className="item">
        <td className="id">{this.props.data.id}</td>
		<td className="name">{this.props.data.name}</td>
        <td className="email">{this.props.data.email}</td>
        <td className="phone">{this.props.data.phone}</td>
        <td className="action">
        	<button className="btn btn-xs btn-info">Sửa</button>
        	<button onClick={this.create} className="btn btn-xs btn-danger">Xóa</button>
        </td>

      </tr>
    );
  }
});

var Table = createReactClass({
	create: function(id) {
		var name = document.getElementById('name');
		var email = document.getElementById('email');
		var phone = document.getElementById('phone');

		console.log(name.value);
		$.ajax({
	      url: 'http://localhost/test/sinhvien/',
	      type: 'POST',
	      data: {name: name, email: email, phone: phone},
	      dataType: 'text',
	      cache: false,
	      success: function(data) {
	        // this.setState({data: data});
	        console.log(data);
	      }.bind(this),
	      error: function(xhr, status, err) {
	        console.error(this.props.url, status, err.toString());
	      }.bind(this)
	    });
	},
	loadData: function (order) {
	    $.ajax({
	      url: 'http://localhost/test/sinhvien',
	      dataType: 'json',
	      cache: false,
	      success: function(data) {
	        this.setState({data: data});
	        // console.log(data);
	      }.bind(this),
	      error: function(xhr, status, err) {
	        console.error(this.props.url, status, err.toString());
	      }.bind(this)
	    });
	},
	getInitialState: function() {
	    return {data: []};
	},
	//Setup chay ajax theo 1 khoang thoi gian
	componentDidMount: function() {
		this.loadData();
		setTimeout(this.loadData, 2000);
	},
	render: function() {
		// console.log(this.state.data);
	return (
		<div class="container">
		    <table class="table table-hover">
		        <thead>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Phone</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		        	 
		        	 {this.state.data.map((e,i) => {

		        	 	return <SinhVien data={e} create={this.create} index={i}/>
		        	 })}
		        </tbody>
		    </table>
			<button onClick={this.create} id="add" class="btn btn-primary">Thêm</button>
			<div>--</div>
			<div class="create">
				<div class="form-group">
					Name <input type="text" id="name" />
				</div>
				<div class="form-group">
					Email <input type="text" id="email" />
				</div>
				<div class="form-group">
					Phone <input type="number" id="phone" />
				</div>

			</div>
		</div>
	);
	}
});
ReactDOM.render(
	<Table />,
	document.getElementById('root')
);

