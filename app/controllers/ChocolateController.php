<?php

class ChocolateController extends BaseController {
	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// We're going to have the index just list all the chocolate, because you can never get too much dark chocolate. :D
		$allChocolate = array();
		//Gives UI access to the CRUD capabilities and gives list.
		$allChocolate = DarkChocolate::getAll();		
		$View=View::make('chocolate.index')->with('allChocolate',$allChocolate);
		return $View;
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function create($chocolateType)
	{
		//Here we add a new type of chocolate to consider!
		if (isset($chocolateType)){
			$darkchocolate = new DarkChocolate;
			$darkchocolate->ChocolateType = $chocolateType;
			$darkchocolate->save();
			$View=View::make('chocolate.create')->with('chocolateType',$chocolateType);
			return $View;
		}
		else {return "Please add chocolate types";}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function upvotePreference($chocolateType)
	{
		// here, we get the old Preference value and increase it
		$theType = DarkChocolate::where('ChocolateType', '=', $chocolateType)->firstOrFail();
		$newPref = $theType->Preference;
		$newPref = $newPref + 1;
		// here we update the preference level on the chocolate type
		$theType = DarkChocolate::where('ChocolateType', '=', $chocolateType)->update(array('Preference' => $newPref));
		$View=View::make('chocolate.upvotePreference')->with('chocolateType',$chocolateType);
		return $View;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($chocolateType)
	{
		//We can remove a chocolate type here
		$goneType = DarkChocolate::where('ChocolateType', '=', $chocolateType)->delete();
		$View=View::make('chocolate.destroy')->with('chocolateType',$chocolateType);
		return $View;
	}


}
