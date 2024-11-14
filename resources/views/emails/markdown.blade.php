@component('mail::message')
# New Product Form Submission

**Name:**  
{{ $details['name'] }}  

**Email:**  
{{ $details['email'] }}  

**Phone:**  
{{ $details['phone'] }}  

**Details:**  
{{ $details['details'] }}

## Selected Products:
<ul style="list-style: auto;">
@foreach ($details['selectedProducts'] as $product)
    <li>
        <strong>Part Number:</strong> {{ $product['Part_Number'] }}
        <ul>
            <li><strong>Renishaw List Price:</strong> {{ $product['Renishaw_List_Price'] }}</li>
            <li><strong>Our Discounted Price:</strong> {{ $product['Our_Discounted_Price'] }}</li>
        </ul>
    </li>
    <br>
@endforeach
</ul>

Thanks,  
CMM Online Store
@endcomponent
