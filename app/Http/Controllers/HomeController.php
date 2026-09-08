<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Branch;
use App\Models\Student;
use App\Models\Employee;
use App\Models\Product;
class HomeController extends Controller
{
    public function Enquiry()
    {
        $enquirydata = Enquiry::latest()->get();

        return view('enquiry.index', compact('enquirydata'));
    }
    public function Product()
    {
        $productdata = Product::latest()->get();

        return view('products.index', compact('productdata'));
    }

    public function CreateProduct()
    {
        return view('products.create');
    }

    public function StoreProduct(Request $request)
    {
        $validated = $request->validate([
            'product_name'      => 'required|string|max:255',
            'product_code'      => 'required|string|max:100|unique:products,product_code',
            'category'          => 'nullable|string|max:255',
            'price'             => 'required|numeric|min:0',
            'quantity'          => 'required|integer|min:0',
            'description'       => 'nullable|string',
            'manufacturing_date' => 'nullable|date',
        ]);

        Product::create($validated);

        return redirect()->route('product')->with('success', 'Product has been Created');
    }


    public function CreateEnquiry()
    {
        return view('enquiry.create');
    }

    public function StoreEnquiry(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        Enquiry::create($validated);

        return redirect()->route('enquiry')->with('success', 'Enquiry has been created');
    }

    public function Employee()
    {
        $employees = Employee::latest()->get();

        return view('employee.index', compact('employees'));
    }

    public function CreateEmployee()
    {
        return view('employee.create');
    }

    public function StoreEmployee(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'department' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:50',
            'joining_date' => 'nullable|date',
            'address' => 'nullable|string',
        ]);

        Employee::create($validated);

        return redirect()->route('employee')->with('success', 'Employee has been Created');
    }

    public function Country()
    {
        $countrydata = Country::get();

        return view('country.index', compact('countrydata'));
    }

    public function CreateCountry()
    {
        return view('country.create');
    }

    public function StoreCountry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:countries,name',
        ]);

        Country::create($validated);

        return redirect()->route('country')->with('success', 'Country has been created');
    }

    public function State()
    {
        $statedata = State::get();

        return view('state.index', compact('statedata'));
    }

    public function CreateState()
    {
        return view('state.create');
    }

    public function StoreState(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:states,name',
        ]);

        State::create($validated);

        return redirect()->route('state')->with('success', 'State has been created');
    }

    public function City()
    {
        $citydata = City::get();

        return view('city.index', compact('citydata'));
    }

    public function CreateCity()
    {
        return view('city.create');
    }

    public function StoreCity(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:cities,name',
        ]);

        City::create($validated);

        return redirect()->route('city')->with('success', 'City has been created');
    }

    public function Branch()
    {
        $branchdata = Branch::get();

        return view('branch.index', compact('branchdata'));
    }

    public function CreateBranch()
    {
        return view('branch.create');
    }

    public function StoreBranch(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:branches,name',
            'code' => 'required|string|max:50|unique:branches,code',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'status' => 'nullable|string',
        ]);

        Branch::create($validated);

        return redirect()->route('branch')->with('success', 'Branch has been created');
    }

    public function Student()
    {
        $studentdata = Student::get();

        return view('student.index', compact('studentdata'));
    }

    public function CreateStudent()
    {
        return view('student.create');
    }

    public function StoreStudent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'class' => 'required|string',
            'aadhar_card_number' => 'nullable|string|max:20',
        ]);

        Student::create($validated);

        return redirect()->route('student')->with('success', 'Student has been Created');
    }
}
