package com.hallak.repositories;

import com.hallak.entities.Location;
import org.springframework.data.repository.PagingAndSortingRepository;


/**
 * Created by mrhal on 4/21/2017.
 */
public interface LocationRepository extends PagingAndSortingRepository<Location, Integer> {
}
