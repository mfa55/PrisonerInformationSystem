package com.hallak.repositories;

import com.hallak.entities.Visitor;
import org.springframework.data.repository.PagingAndSortingRepository;
public interface VisitorRepository extends PagingAndSortingRepository<Visitor, Integer>{
}
