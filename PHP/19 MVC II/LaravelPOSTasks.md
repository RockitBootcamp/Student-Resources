# Laravel POS Tasks

### Task1: 	Get Laravel Working


### Task2:	Customer List Page
		link:	/customer/
		route: 	customerController:listAction()
		view:	customerList.blade.php

### Task3: 	Invoice List Page
		link: 	/invoice/
		route 	invoiceController:listAction()
		view:	invoiceList.blade.php

### Task4:	Invoice Detail Page
		link:	/invoice/{id}
		route 	invoiceController:detailAction($id)
		view:	invoiceDetail.blade.php

### Task5:	Create new Invoice
		link:	/customer/{customerId}/newInvoice
		route:	invoiceController:newInvoice($customerId)
		view:	redirect to /invoice/{invoiceId}

### Task 6	Add Item To Invoice
		link:	POST: /invoice/{invoiceId}/addItem
					// itemId={itemId}
					// qty={qty}
		route:	invoiceController:addItemAction($invoiceID, $itemId, $quantity){
		view:	redirect: /invoice/{invoiceId}/
		}

# BONUS


### Task 7:	Customer Detail Page		
		link: 		/customer/{id}/
		routes to:	customerController:detailAction
		view:		customerDetail.blade.php

		DB::select(
			"Select * from Customer where id=:id", 
			array("id"=>$id)
		);

### Task 8:	Create a link on customer list page for Edit
		link:	/customer/{id}/edit
		route:	customerController:editAction($id)
		view:	customerEdit.blade.php

# Examples


### Get details of Invoice
```
// Invoice Controller
function detailAction($id) {
	$lineItems = DB::getLineItems();

	$total = 0;
	foreach($items as $item) {
		$total = $total + $item->subTotal;
	}

	// Hand off to view

	return View("invoiceDetail",
		["lineItems" => $lineItems,
		"total" =>$total,
		"items"=?$items 
		]
	);
}
```

```
// invoiceDetail.blade.php
<table>
	
	@foreach(items as item) 

	<tr>
		<td>{{item->quantity}}</td>
		<td>{{item->name}}</td>
		<td>{{item->price}}</td>
		<td>{{item->subtotal}}</td>
	</tr>

	@endforeach

	<tr>
		<td>$nbsp;</td>
		<td>$nbsp;</td>
		<td>$nbsp;</td>
		<td>{{total}}</td>
	</tr>
</table>
```













<div>
	
	{{ if $customer->gender == "male" }}
	<option value="male" selected>Male</option>
	{{ else }}
	<option value="male">Male</option>
	{{ end if}}

	{{ if $customer->gender == "female" }}
	<option value="female" selected>Female</option>
	{{ else }}
	<option value="female">Female</option>
	{{ end if}}



	<option value="male" {{ if(customer->gender=="male"), "Selected" }} >Male</option>
	<option value="female" {{ if(customer->gender=="female"), "Selected" }}>Female</option>



</div>









