package com.hallak.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

/**
 * Created by mrhal on 4/21/2017.
 */
@Controller
public class MainController {
    @RequestMapping(value = {"/", "/index"}, method = RequestMethod.GET)
    public String index(){
        return "index";
    }

    @RequestMapping(value = {"/prisoner"}, method = RequestMethod.GET)
    public String prisoners(){
        return "prisoners";
    }

    @RequestMapping(value = {"/visitor"}, method = RequestMethod.GET)
    public String visitors(){
        return "visitors";
    }

    @RequestMapping(value = {"/staff"}, method = RequestMethod.GET)
    public String staff(){
        return "staff";
    }

    @RequestMapping(value = {"/victim"}, method = RequestMethod.GET)
    public String victim(){
        return "victims";
    }

    @RequestMapping(value = {"/settings"}, method = RequestMethod.GET)
    public String settings(){
        return "settings";
    }
}
