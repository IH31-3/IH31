<?php
class DAOVehicle {
    private int $vehicle_no;
    private int $model_year;
    private String $shape;
    private String $model;
    private String $grade;
    private String $maker;
    private int $fuel;
    private String $vehicle_model;
    private int $capacity; 
    private String $drive_system;
    private int $mileage; 
    private String $exterior_color; 
    private String $interior_color;
    private String $nox_deadline;
    private String $airbag;
    private String $car_history;
    private int $classfication_classfication_number;
    private String $repair_history;
    private String $evaluation_points;
    private String $exterior_evaluation;
    private String $interior_evaluaion;
    private int $purchase_amount;
    private String $situation_comment;
    private String $appeal_point;

    /**
     * @return int
     */
    public function getVehicleNo(): int
    {
        return $this->vehicle_no;
    }

    /**
     * @param int $vehicle_no
     */
    public function setVehicleNo(int $vehicle_no): void
    {
        $this->vehicle_no = $vehicle_no;
    }

    /**
     * @return int
     */
    public function getModelYear(): int
    {
        return $this->model_year;
    }

    /**
     * @param int $model_year
     */
    public function setModelYear(int $model_year): void
    {
        $this->model_year = $model_year;
    }

    /**
     * @return String
     */
    public function getShape(): string
    {
        return $this->shape;
    }

    /**
     * @param String $shape
     */
    public function setShape(string $shape): void
    {
        $this->shape = $shape;
    }

    /**
     * @return String
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param String $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return String
     */
    public function getGrade(): string
    {
        return $this->grade;
    }

    /**
     * @param String $grade
     */
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }

    /**
     * @return String
     */
    public function getMaker(): string
    {
        return $this->maker;
    }

    /**
     * @param String $maker
     */
    public function setMaker(string $maker): void
    {
        $this->maker = $maker;
    }

    /**
     * @return int
     */
    public function getFuel(): int
    {
        return $this->fuel;
    }

    /**
     * @param int $fuel
     */
    public function setFuel(int $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return String
     */
    public function getVehicleModel(): string
    {
        return $this->vehicle_model;
    }

    /**
     * @param String $vehicle_model
     */
    public function setVehicleModel(string $vehicle_model): void
    {
        $this->vehicle_model = $vehicle_model;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return String
     */
    public function getDriveSystem(): string
    {
        return $this->drive_system;
    }

    /**
     * @param String $drive_system
     */
    public function setDriveSystem(string $drive_system): void
    {
        $this->drive_system = $drive_system;
    }

    /**
     * @return int
     */
    public function getMileage(): int
    {
        return $this->mileage;
    }

    /**
     * @param int $mileage
     */
    public function setMileage(int $mileage): void
    {
        $this->mileage = $mileage;
    }

    /**
     * @return String
     */
    public function getExteriorColor(): string
    {
        return $this->exterior_color;
    }

    /**
     * @param String $exterior_color
     */
    public function setExteriorColor(string $exterior_color): void
    {
        $this->exterior_color = $exterior_color;
    }

    /**
     * @return String
     */
    public function getInteriorColor(): string
    {
        return $this->interior_color;
    }

    /**
     * @param String $interior_color
     */
    public function setInteriorColor(string $interior_color): void
    {
        $this->interior_color = $interior_color;
    }

    /**
     * @return String
     */
    public function getNoxDeadline(): string
    {
        return $this->nox_deadline;
    }

    /**
     * @param String $nox_deadline
     */
    public function setNoxDeadline(string $nox_deadline): void
    {
        $this->nox_deadline = $nox_deadline;
    }

    /**
     * @return String
     */
    public function getAirbag(): string
    {
        return $this->airbag;
    }

    /**
     * @param String $airbag
     */
    public function setAirbag(string $airbag): void
    {
        $this->airbag = $airbag;
    }

    /**
     * @return String
     */
    public function getCarHistory(): string
    {
        return $this->car_history;
    }

    /**
     * @param String $car_history
     */
    public function setCarHistory(string $car_history): void
    {
        $this->car_history = $car_history;
    }

    /**
     * @return int
     */
    public function getClassficationClassficationNumber(): int
    {
        return $this->classfication_classfication_number;
    }

    /**
     * @param int $classfication_classfication_number
     */
    public function setClassficationClassficationNumber(int $classfication_classfication_number): void
    {
        $this->classfication_classfication_number = $classfication_classfication_number;
    }

    /**
     * @return String
     */
    public function getRepairHistory(): string
    {
        return $this->repair_history;
    }

    /**
     * @param String $repair_history
     */
    public function setRepairHistory(string $repair_history): void
    {
        $this->repair_history = $repair_history;
    }

    /**
     * @return String
     */
    public function getEvaluationPoints(): string
    {
        return $this->evaluation_points;
    }

    /**
     * @param String $evaluation_points
     */
    public function setEvaluationPoints(string $evaluation_points): void
    {
        $this->evaluation_points = $evaluation_points;
    }

    /**
     * @return String
     */
    public function getExteriorEvaluation(): string
    {
        return $this->exterior_evaluation;
    }

    /**
     * @param String $exterior_evaluation
     */
    public function setExteriorEvaluation(string $exterior_evaluation): void
    {
        $this->exterior_evaluation = $exterior_evaluation;
    }

    /**
     * @return String
     */
    public function getInteriorEvaluaion(): string
    {
        return $this->interior_evaluaion;
    }

    /**
     * @param String $interior_evaluaion
     */
    public function setInteriorEvaluaion(string $interior_evaluaion): void
    {
        $this->interior_evaluaion = $interior_evaluaion;
    }

    /**
     * @return int
     */
    public function getPurchaseAmount(): int
    {
        return $this->purchase_amount;
    }

    /**
     * @param int $purchase_amount
     */
    public function setPurchaseAmount(int $purchase_amount): void
    {
        $this->purchase_amount = $purchase_amount;
    }

    /**
     * @return String
     */
    public function getSituationComment(): string
    {
        return $this->situation_comment;
    }

    /**
     * @param String $situation_comment
     */
    public function setSituationComment(string $situation_comment): void
    {
        $this->situation_comment = $situation_comment;
    }

    /**
     * @return String
     */
    public function getAppealPoint(): string
    {
        return $this->appeal_point;
    }

    /**
     * @param String $appeal_point
     */
    public function setAppealPoint(string $appeal_point): void
    {
        $this->appeal_point = $appeal_point;
    }

}
class DAOauction{
    private int $auction_no;
    private String $date;
    private String $explanation;
    private String $auction_name;

    /**
     * @return int
     */
    public function getAuctionNo(): int
    {
        return $this->auction_no;
    }

    /**
     * @param int $auction_no
     */
    public function setAuctionNo(int $auction_no): void
    {
        $this->auction_no = $auction_no;
    }

    /**
     * @return String
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param String $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return String
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
     * @param String $explanation
     */
    public function setExplanation(string $explanation): void
    {
        $this->explanation = $explanation;
    }

    /**
     * @return String
     */
    public function getAuctionName(): string
    {
        return $this->auction_name;
    }

    /**
     * @param String $auction_name
     */
    public function setAuctionName(string $auction_name): void
    {
        $this->auction_name = $auction_name;
    }

}
class DAOclient{
    private int $client_no;
    private String $client_name;
    private String $address;
    private int $number;
    private String $password;

    /**
     * @return int
     */
    public function getClientNo(): int
    {
        return $this->client_no;
    }

    /**
     * @param int $client_no
     */
    public function setClientNo(int $client_no): void
    {
        $this->client_no = $client_no;
    }

    /**
     * @return String
     */
    public function getClientName(): string
    {
        return $this->client_name;
    }

    /**
     * @param String $client_name
     */
    public function setClientName(string $client_name): void
    {
        $this->client_name = $client_name;
    }

    /**
     * @return String
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
class DAOcustomerBilling{
    private int $client_no;
    private int $payment;
    private String $billing_address;

    /**
     * @return int
     */
    public function getClientNo(): int
    {
        return $this->client_no;
    }

    /**
     * @param int $client_no
     */
    public function setClientNo(int $client_no): void
    {
        $this->client_no = $client_no;
    }

    /**
     * @return int
     */
    public function getPayment(): int
    {
        return $this->payment;
    }

    /**
     * @param int $payment
     */
    public function setPayment(int $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @return String
     */
    public function getBillingAddress(): string
    {
        return $this->billing_address;
    }

    /**
     * @param String $billing_address
     */
    public function setBillingAddress(string $billing_address): void
    {
        $this->billing_address = $billing_address;
    }
}
class DAOemployee{
    private int $employee_no;
    private string $employee_name;
    private string $password;

    /**
     * @return int
     */
    public function getEmployeeNo(): int
    {
        return $this->employee_no;
    }

    /**
     * @param int $employee_no
     */
    public function setEmployeeNo(int $employee_no): void
    {
        $this->employee_no = $employee_no;
    }

    /**
     * @return string
     */
    public function getEmployeeName(): string
    {
        return $this->employee_name;
    }

    /**
     * @param string $employee_name
     */
    public function setEmployeeName(string $employee_name): void
    {
        $this->employee_name = $employee_name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
class DAOListing{
    private int $listing_no;
    private int $vehicle_no;
    private int $auction_no;

    /**
     * @return int
     */
    public function getListingNo(): int
    {
        return $this->listing_no;
    }

    /**
     * @param int $listing_no
     */
    public function setListingNo(int $listing_no): void
    {
        $this->listing_no = $listing_no;
    }

    /**
     * @return int
     */
    public function getVehicleNo(): int
    {
        return $this->vehicle_no;
    }

    /**
     * @param int $vehicle_no
     */
    public function setVehicleNo(int $vehicle_no): void
    {
        $this->vehicle_no = $vehicle_no;
    }

    /**
     * @return int
     */
    public function getAuctionNo(): int
    {
        return $this->auction_no;
    }

    /**
     * @param int $auction_no
     */
    public function setAuctionNo(int $auction_no): void
    {
        $this->auction_no = $auction_no;
    }
}
class DAOListingHistory{
    private int $money;
    private int $listing_no;
    private int $client_no;

    /**
     * @return int
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    /**
     * @param int $money
     */
    public function setMoney(int $money): void
    {
        $this->money = $money;
    }

    /**
     * @return int
     */
    public function getListingNo(): int
    {
        return $this->listing_no;
    }

    /**
     * @param int $listing_no
     */
    public function setListingNo(int $listing_no): void
    {
        $this->listing_no = $listing_no;
    }

    /**
     * @return int
     */
    public function getClientNo(): int
    {
        return $this->client_no;
    }

    /**
     * @param int $client_no
     */
    public function setClientNo(int $client_no): void
    {
        $this->client_no = $client_no;
    }
}
class DAOmatter{
    private int $matter_no;
    private int $status;
    private int $client_no;
    private int $employee_no;
    private int $vehicle_no;
    private int $money;

    /**
     * @return int
     */
    public function getMatterNo(): int
    {
        return $this->matter_no;
    }

    /**
     * @param int $matter_no
     */
    public function setMatterNo(int $matter_no): void
    {
        $this->matter_no = $matter_no;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getClientNo(): int
    {
        return $this->client_no;
    }

    /**
     * @param int $client_no
     */
    public function setClientNo(int $client_no): void
    {
        $this->client_no = $client_no;
    }

    /**
     * @return int
     */
    public function getEmployeeNo(): int
    {
        return $this->employee_no;
    }

    /**
     * @param int $employee_no
     */
    public function setEmployeeNo(int $employee_no): void
    {
        $this->employee_no = $employee_no;
    }

    /**
     * @return int
     */
    public function getVehicleNo(): int
    {
        return $this->vehicle_no;
    }

    /**
     * @param int $vehicle_no
     */
    public function setVehicleNo(int $vehicle_no): void
    {
        $this->vehicle_no = $vehicle_no;
    }

    /**
     * @return int
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    /**
     * @param int $money
     */
    public function setMoney(int $money): void
    {
        $this->money = $money;
    }
}