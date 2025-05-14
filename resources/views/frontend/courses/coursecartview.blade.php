<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Course Enrollment</title>
    <style>
        /* Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f7f9fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .cart-container {
            background: #fff;
            max-width: 900px;
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .course-preview {
            flex: 1 1 300px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .course-preview img {
            max-width: 180px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            object-fit: cover;
        }

        .course-preview h2 {
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .course-preview p.instructor {
            font-weight: 600;
            opacity: 0.85;
            margin-bottom: 20px;
        }

        .course-preview p.description {
            font-size: 0.9rem;
            line-height: 1.3;
        }

        .enrollment-details {
            flex: 1 1 400px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .summary-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background: #fafafa;
            margin-bottom: 30px;
        }

        .summary-box h3 {
            margin-bottom: 15px;
            color: #2575fc;
            font-weight: 700;
            border-bottom: 2px solid #2575fc;
            padding-bottom: 8px;
        }

        .summary-list {
            list-style: none;
        }

        .summary-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-size: 1rem;
            border-bottom: 1px solid #eee;
        }

        .summary-list li:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 1.2rem;
            color: #2575fc;
        }

        .btn-enroll {
            background-color: #2575fc;
            border: none;
            color: white;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 10px;
            cursor: pointer;
            align-self: center;
            width: 100%;
            max-width: 320px;
            transition: background-color 0.3s ease;
            box-shadow: 0 6px 15px rgba(37, 117, 252, 0.45);
        }

        .btn-enroll:hover {
            background-color: #1b54d6;
            box-shadow: 0 8px 20px rgba(27, 84, 214, 0.7);
        }

        @media (max-width: 720px) {
            .cart-container {
                flex-direction: column;
                box-shadow: none;
                border-radius: 0;
            }

            .course-preview,
            .enrollment-details {
                flex: 1 1 100%;
            }

            .course-preview {
                border-radius: 0;
                padding: 20px;
                text-align: left;
                align-items: flex-start;
            }

            .btn-enroll {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="cart-container">
        <div class="course-preview">
            <img src="" alt="" />
            <h2></h2>
            <p class="instructor">billing info</p>
            <p class="description"></p>
        </div>
        <div class="enrollment-details">
            <div class="summary-box">
                <h3>Enrollment Summary</h3>

                @if(count($mycart) > 0)

                @foreach ($mycart as $cartdata)
                <ul class="summary-list">
                    <li><span>Name:</span> {{$cartdata['name']}}<span>
                    <li><span>Course Price:</span> <span>{{$cartdata['price']}}</span></li>


                    <li><span>Quantity:</span> {{$cartdata['quantity']}}<span>
                        </span></li>


                    <li><span>Image: </span> <img src="{{'/uploads/course/'.$cartdata['image']}}" style="height: 100px; width:200px;" alt="" /> <span>
                        </span></li>

                    <li><span>SubTotal:</span> <span>{{$cartdata['subtotal']}}</span></li>



                </ul>
                @endforeach

                <li><span>Total:</span><span> {{array_sum ( array_column ( Session::get('cart') ,'subtotal' ))}}</span></li>


            </div>
            @else
            <div>
                <h4>Cart is Empty</h4>
            </div>
            @endif


            <a class="btn-enroll" style="text-decoration: none;  text-align: center;" href="{{Route('check.enroll')}}"> Proceed to Enroll


            </a>

        </div>
    </div>
</body>

</html>