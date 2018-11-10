var SinhVien = createReactClass({
	render: function () {
		return (
		  <tr className="item" key = {this.props.data.key}>
		    <td className="id">{this.props.data.id}</td>
			<td className="name">{this.props.data.name}</td>
		    <td className="email">{this.props.data.email}</td>
		    <td className="phone">{this.props.data.phone}</td>
		    <td className="action">
		    	<button onClick={()=>this.props.fillValue(this.props.data.id, this.props.data.name, this.props.data.email, this.props.data.phone)} className="btnEdit btn btn-xs btn-info">Sửa</button>
		    	<button onClick={()=>this.props.destroy(this.props.data.id)} className="btn btn-xs btn-danger">Xóa</button>
		    </td>

		  </tr>
		);
	}
});
class SinhVienController extends React.Component {
	constructor(props) {
		super(props);
		this.state = {sinhviens: []};
		this.headers = [
			{ key: 'id', label: 'ID' },
			{ key: 'name', label: 'Name' },
			{ key: 'email', label: 'Email' },
			{ key: 'phone', label: 'Phone' },
			{ key: 'action', label: 'Action' }
		];

		this.fillValue = function(id, name, email, phone){
			console.log("Fill value !!!");
			$('#svid').val(id);                           
			$('#name').val(name);                           
			$('#email').val(email);                           
			$('#phone').val(phone);                           
			$("#editId").text('Đang sửa id = ' + id);

		}

		this.list = function() {
			console.log("show list");
			fetch('api/sinhvien')
			.then(response => {
				return response.json();
			}).then(result => {
				// console.log(result);
				this.setState({
					sinhviens:result
				});
			});
		}

		this.store = function(name, email, phone) {
			console.log("create !!!");
			
			
			
			fetch('api/sinhvien/', {
			method: 'POST',
			body: JSON.stringify({
				name: name,
				email: email,
				phone: phone
			}),
			headers: {
				"Content-type": "application/json; charset=UTF-8"
			}
		}).then(response => {
				return response.json()
			}).then(result => {
				this.setState({
					sinhviens: result
				});
			});
			//gan bang rong
			$('#name').val('');                           
			$('#email').val('');                           
			$('#phone').val('');  
		}

		
		this.edit = function(id, name, email, phone) {
			console.log(id + " is updated ");
			fetch('api/sinhvien/'+ id, {
			method: 'PUT',
			body: JSON.stringify({
				"name": name,
				"email": email,
				"phone": phone
			}),
			headers: {
			  "Content-type": "application/json; charset=UTF-8"
			}
		}).then(response => {
			return response.json()
		}).then(result => {
			// console.log(json)
			this.setState({
				sinhviens:result
			});
			$("#editId").text('');
		})
		}
		this.delete = function(id) {
			console.log(id + " is deleted ");
			fetch('api/sinhvien/'+id, {
				method: 'DELETE'
			})
			.then(response => {
				return response.json();
			}).then(result => {
				// console.log(result);
				this.setState({
					sinhviens:result
				});
			});;
		}


	}
	
	componentDidMount() {
		this.list();
		// this.edit(105);
	}
	render() {
		return (
		/*var name = document.getElementById('name').value;                           
		var email = document.getElementById('email').value;                           
		var phone = document.getElementById('phone').value;*/                           
		<div className="container">
			<div className="create row">
				<div className="form-group col-sm-3">
					<input type="text" className="form-control" id="name" placeholder="name"/>
				</div>
				<div className="form-group col-sm-3">
					<input type="text" className="form-control" id="email" placeholder="email"/>
				</div>
				<div className="form-group col-sm-3">
					<input type="text" className="form-control" id="phone" placeholder="phone"/>
				</div>
				<input type="hidden" className="form-control" id="svid" disabled/>
				<div className="form-group col-sm-3">
					<button type="button" className="btn btn-primary"  onClick={()=>this.store($('#name').val(), $('#email').val(), $('#phone').val())}>Thêm</button>|| 
					<button type="button" className="btn btn-primary"  onClick={()=>this.edit($('#svid').val(), $('#name').val(), $('#email').val(), $('#phone').val())}>Sửa</button>
					<span className="text-danger" id="editId"></span>
				</div>
				
			</div>

			<table className="table table-bordered">
				<thead>
					<tr>
					{
						this.headers.map(function(h) {
							return (
								<th key = {h.key}>{h.label}</th>
							)
						})
					}
					</tr>
				</thead>
				<tbody>
					{
						this.state.sinhviens.map((item, key) =>{             
						return <SinhVien data={item} key={key} fillValue={(id, name, email, phone)=>this.fillValue(id,name, email, phone)} destroy={(id)=>this.delete(id)}/>
							
						})
					}
				</tbody>
			</table>
		</div>
		)
	}
}

ReactDOM.render(
	<SinhVienController />, 
	document.getElementById('root')
);