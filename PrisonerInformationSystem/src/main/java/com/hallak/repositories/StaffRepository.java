package com.hallak.repositories;

import com.hallak.entities.Staff;
import org.springframework.data.repository.PagingAndSortingRepository;


/**
 * Created by mrhal on 4/21/2017.
 */
public interface StaffRepository extends PagingAndSortingRepository<Staff, Long> {
}
